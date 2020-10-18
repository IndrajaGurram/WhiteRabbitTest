<?php
include( 'CListDirectoryFilesLibrary.class.php');

class CListDirectoryFilesApplication {
    protected $m_arrstrFilesinDirectory;

    public function getFilesInDirectory() {
    
        $strDirectoryName = 'C:/xampp/htdocs/WhiteRabbit';

        $objListDirectoryFilesLibrary = new CListDirectoryFilesLibrary();
        $objListDirectoryFilesLibrary->setDirectoryName( $strDirectoryName );
        if( false == $objListDirectoryFilesLibrary->getFilesInDirectory() ) {
            echo "Failed to list files.";
            exit;
        }

        $m_arrstrFilesinDirectory = $objListDirectoryFilesLibrary->getFiles();
              
    }

}

$objListDirectoryFilesApplication = new CListDirectoryFilesApplication();
$objListDirectoryFilesApplication->getFilesInDirectory();



?>