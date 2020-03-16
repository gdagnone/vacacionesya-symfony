<?php

namespace App\Form;

use App\Entity\Avisos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aviso_fecha')
            ->add('aviso_activo')
            ->add('aviso_pausado')
            ->add('aviso_vigencia_hasta')
            ->add('aviso_likes')
            ->add('aviso_cant_visitas')
            ->add('aviso_id_idioma')
            ->add('aviso_id_operacion')
            ->add('aviso_titulo')
            ->add('aviso_descripcion')
            ->add('aviso_monto')
            ->add('aviso_id_moneda')
            ->add('aviso_id_periodo_monto')
            ->add('aviso_id_periodo_alquiler')
            ->add('aviso_id_tipo_inmueble')
            ->add('aviso_location')
            ->add('aviso_id_pais')
            ->add('aviso_codpostal')
            ->add('aviso_localidad')
            ->add('aviso_calle')
            ->add('aviso_altura')
            ->add('aviso_piso')
            ->add('aviso_depto')
            ->add('aviso_foto_principal')
            ->add('aviso_foto1')
            ->add('aviso_foto2')
            ->add('aviso_foto3')
            ->add('aviso_foto4')
            ->add('aviso_foto5')
            ->add('aviso_foto6')
            ->add('aviso_foto7')
            ->add('aviso_urlvideo')
            ->add('aviso_checkin')
            ->add('aviso_ckeckout')
            ->add('aviso_m2')
            ->add('aviso_m2_cub')
            ->add('aviso_ambientes')
            ->add('aviso_dormitorios')
            ->add('aviso_plazas')
            ->add('aviso_camas')
            ->add('aviso_banios')
            ->add('aviso_cocina')
            ->add('aviso_cochera')
            ->add('aviso_id_ubicacion')
            ->add('aviso_parrilla')
            ->add('aviso_cable')
            ->add('aviso_wifi')
            ->add('aviso_tv')
            ->add('aviso_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Avisos::class,
        ]);
    }
}
