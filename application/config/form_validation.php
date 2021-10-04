<?php
$config=[

       'add_admin_rules'=>[
                         [

                          'field' => 'text',
                          'label' => 'paper_title',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'name',
                          'label' => 'authorname',
                          'rules' => 'required'
                          ],
                          [
                            'field' => 'number',
                            'label' => 'doi',
                            'rules' => 'required'
                          ],
                        
  [

   'field' => 'number',
   'label' => 'Article_id',
   'rules' => 'required'
   ],
   [
   'field' => 'name',
   'label' => 'Name',
   'rules' => 'required'
   ],
   [
     'field' => 'text',
     'label' => 'Title',
     'rules' => 'required'
   ],
   [
    'field' => 'text',
    'label' => 'status',
    'rules' => 'required'
  ],
 ],





];



?>