<?php

class View
{

    //public $template_view; // ����� ����� ������� ����� ��� �� ���������.

    /*
    $content_file - ���� ������������ ������� �������;
    $template_file - ����� ��� ���� ������� ������;
    $data - ������, ���������� �������� �������� ��������. ������ ����������� � ������.
    */
    function render($content_view, $template_view, $data = null)
    {

        /*
        if(is_array($data)) {

            // ����������� �������� ������� � ����������
            extract($data);
        }
        */

        /*
        ����������� ���������� ����� ������ (���),
        ������ �������� ����� ������������ ���
        ��� ����������� �������� ���������� ��������.
        */
        require_once ROOT .DS . 'application'.DS .'view'.DS.'template'.DS .'template.php';
        require_once ROOT .DS . 'application'.DS .'view'.DS .$content_view;
    }
}
