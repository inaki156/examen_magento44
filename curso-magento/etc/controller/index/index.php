<?php
namespace etc\controller\index;
use Magento\Framework\App\Action\HttpGetActionInterface;

Class Index implements  HttpGetActionInterface{

    public fuction public function __construct( \Magento\Frameworik\App\Action\Context $context,  \Magento\Framework\View\Result\PageFactory $pageFactory
,\Hiberus\Curso\Model\CursoFactory $curso)
    {
        $this->pageFaactory=$pageFactory;
        $this->cursoFactory=$curso;
    }

    public function execute()
    {
       return $this->pageFaactory->create();
    }
}
