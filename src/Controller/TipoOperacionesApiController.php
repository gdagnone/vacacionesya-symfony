<?php
 /**
  * Created by Gabriel D'Agnone.
  * User: gesellalquilo
  * Date: 28/02/2020
  * Time: 19:35
  */

 namespace App\Controller;


 use App\Entity\TipoOperaciones;
 use App\Repository\TipoOperacionesRepository;
 use Doctrine\ORM\EntityManagerInterface;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\JsonResponse;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Component\Serializer\Serializer;
 

 /**
  * Class TipoOperacionesApiController
  * @package App\Controller
  * @Route("/api", name="operaciones_api")
  */
 class TipoOperacionesApiController extends AbstractController
 {
  /**
   * @param TipoOperacionesRepository $tipoOperacionesRepository
   * @return JsonResponse
   * @Route("/operaciones", name="operaciones", methods={"GET"})
   */
  public function getOperaciones(TipoOperacionesrepository $tipoOperacionesRepository){
    
   $data = $tipoOperacionesRepository->findAll();
   
   
    return $this->responseJson($data);
   


   
  }

  /**
   * @param Request $request
   * @param EntityManagerInterface $entityManager
   * @param TipoOperacionesRepository $tipoOperacionesRepository
   * @return JsonResponse
   * @throws \Exception
   * @Route("/operaciones", name="operaciones_add", methods={"POST"})
   */
  public function addOperaciones(Request $request, EntityManagerInterface $entityManager, TipoOperacionesRepository $tipoOperacionesRepository){

   try{
    $request = $this->transformJsonBody($request);

    if (!$request || !$request->get('operdetalle') || !$request->request->get('operactivo') || !$request->request->get('operorden')  ){
     throw new \Exception();
    }

    $operacion = new TipoOperaciones();
    $operacion->setOperDetalle($request->get('operdetalle'));
    $operacion->setOperActivo($request->get('operactivo'));
    $operacion->setOperOrden($request->get('operorden'));
    $entityManager->persist($operacion);
    $entityManager->flush();

    $data = [
     'status' => 200,
     'success' => "Operacion added successfully",
    ];
    return $this->response($data);

   }catch (\Exception $e){
    $data = [
     'status' => 422,
     'errors' => "Data no valid",
    ];
    return $this->response($data, 422);
   }

  }


  /**
   * @param TipoOperacionesRepository $tipoOperacionesRepository
   * @param $id
   * @return JsonResponse
   * @Route("/operacion/{id}", name="operacion_get", methods={"GET"})
   */
  public function getOperacion(TipoOperacionesRepository $tipoOperacionesRepository, $id){
   $operacion = $tipoOperacionesRepository->find($id);

   if (!$operacion){
    $data = [
     'status' => 404,
     'errors' => "Not found",
    ];
    return $this->response($data, 404);
   }
   //return $this->response($operacion);
   return $this->responseJson($operacion);
  }

  /**
   * @param Request $request
   * @param EntityManagerInterface $entityManager
   * @param TipoOperacionesRepository $tipoOperacionesRepository
   * @param $id
   * @return JsonResponse
   * @Route("/operacion/{id}", name="operacion_put", methods={"PUT"})
   */
  public function updateOperacion(Request $request, EntityManagerInterface $entityManager, TipoOperacionesRepository $tipoOperacionesRepository, $id){

   try{
    $operacion = $tipoOperacionesRepository->find($id);

    if (!$operacion){
     $data = [
      'status' => 404,
      'errors' => "Operacion not found",
     ];
     return $this->response($data, 404);
    }

    $request = $this->transformJsonBody($request);
    if (!$request || !$request->get('operdetalle') || !$request->request->get('operactivo') || !$request->request->get('operorden')  ){   
    
     throw new \Exception();
    }

    $operacion->setOperDetalle($request->get('operdetalle'));
    $operacion->setOperActivo($request->get('operactivo'));
    $operacion->setOperOrden($request->get('operorden'));
    $entityManager->flush();

    $data = [
     'status' => 200,
     'errors' => "Operacion updated successfully",
    ];
    return $this->response($data);

   }catch (\Exception $e){
    $data = [
     'status' => 422,
     'errors' => "Data no valid",
    ];
    return $this->response($data, 422);
   }

  }


  /**
   * @param TipoOperacionesRepository $tipoOperacionesRepository
   * @param $id
   * @return JsonResponse
   * @Route("/operacion/{id}", name="operacion_delete", methods={"DELETE"})
   */
  public function deleteOperacion(EntityManagerInterface $entityManager, TipoOperacionesrepository $tipoOperacionesRepository, $id){
   $operacion = $tipoOperacionesRepository->find($id);

   if (!$operacion){
    $data = [
     'status' => 404,
     'errors' => "operacion not found",
    ];
    return $this->response($data, 404);
   }

   $entityManager->remove($operacion);
   $entityManager->flush();
   $data = [
    'status' => 200,
    'errors' => "operacion deleted successfully",
   ];
   return $this->response($data);
  }





  /**
   * Returns a JSON response
   *
   * @param array $data
   * @param $status
   * @param array $headers
   * @return JsonResponse
   */
  public function response($data, $status = 200, $headers = [])
  {
   
   return new JsonResponse($data, $status, $headers);
   
  }
  public function responseJson($data)
  {
   

    $data = $this->get('serializer')->serialize($data, 'json');  

    $response = new Response($data);
    
    $response->headers->set('Content-Type', 'application/json');

    return $response;
   
  }


  
  protected function transformJsonBody(\Symfony\Component\HttpFoundation\Request $request)
  {
   $data = json_decode($request->getContent(), true);

   if ($data === null) {
    return $request;
   }

   $request->request->replace($data);

   return $request;
  }

 }