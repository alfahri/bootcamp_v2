<?php
    function biodata()
    {
        $data['Nama'] = 'M. AL Fakhri';
        $data['Address'] = 'Perum Citra Indah';
        $data['hobbies'] = array('Ngoding','Ngoding','Ngoding');
        $data['Married'] = TRUE;
        $data['School'] = [[ 'highSchool' => 'SMK Fatahillah','university'=>'none']];
        foreach($data as $highSchool=>$values){
            $object = (object) $values;
        } 
        $data['Skills'] = array(
                        'PHP' => '90',
                        'Java' => '80',
                        'Javascript' => '80',
                        'HTML' => '90',
                        'Codeigniter' => '90',
                        'CSS' => '70'
                    );

        
        return $data;
    }

    $data = biodata();
    $data_json = json_encode($data,JSON_PRETTY_PRINT);
    echo '<pre>Biodata'.$data_json.'</pre>';
?>