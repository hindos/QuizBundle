<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\QuizBundle\Form\Type;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder,
    Egulias\QuizBundle\Model\Quizes\Quiz,
    Egulias\QuizBundle\Form\Type\QuestionFormType
;

class QuizFormType extends AbstractType
{
    protected $quiz = null;

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => 'Name',
                'required' => TRUE,
                'trim'     => TRUE
            ));
            $builder->add('questions', 'collection');
        if($options['data']['existing']) {
        }

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Egulias\QuizBundle\Entity\Quiz'
        );
    }

    public function getName()
    {
        return 'quiz';
    }
}
