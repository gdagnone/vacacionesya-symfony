<?php
 /**
  * Created by PhpStorm.
  * User: hicham benkachoud
  * Date: 06/01/2020
  * Time: 20:39
  */

 namespace App\Controller;


 use App\Entity\User;
 use App\Controller\ApiController;
 use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\JsonResponse;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
 use Symfony\Component\Security\Core\User\UserInterface;


 class AuthController extends ApiController
 {

  public function register(Request $request, UserPasswordEncoderInterface $encoder)
  {
   $em = $this->getDoctrine()->getManager();
   $request = $this->transformJsonBody($request);
   $email = $request->get('email');   
   $password = $request->get('password');
   $usernombre = $request->get('usernombre');
   

  // if (empty($username) || empty($password) || empty($email)){
    if ( empty($password) || empty($email || empty($usernombre)  )){
    return $this->respondValidationError("Invalid Username or Password");
   }


   $user = new User($email);

   $user->setPassword($encoder->encodePassword($user, $password));
   $user->setEmail($email);
   $user->setUserNombre($usernombre);
   $em->persist($user);
   $em->flush();

        # Code 307 preserves the request method, while redirectToRoute() is a shortcut method.

    $parametros = array( 
        'username' => $email,
        'password' => $password
    );

  

    //return $this->redirectToRoute('api_login_check', $parametros, 307);

   return $this->respondWithSuccess(sprintf('User %s successfully created', $user->getUsername()));
  }

  /**
   * @param UserInterface $user
   * @param JWTTokenManagerInterface $JWTManager
   * @return JsonResponse
   */
  public function getTokenUser(UserInterface $user, JWTTokenManagerInterface $JWTManager)
  {
   return new JsonResponse(['token' => $JWTManager->create($user)]);
  }

 }