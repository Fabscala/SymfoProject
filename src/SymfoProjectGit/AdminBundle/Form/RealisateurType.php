<?php
namespace SymfoProjectGit\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use SymfoProjectGit\AdminBundle\Form\RealisateurType;
use SymfoProjectGit\AdminBundle;

class RealisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('description')
            ->add('date_de_naissance')
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
        ;
    }
}
?>