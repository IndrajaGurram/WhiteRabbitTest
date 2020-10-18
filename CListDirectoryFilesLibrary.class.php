<?php

class CListDirectoryFilesLibrary {

    protected $m_strDirectoryName;
    protected $m_arrstrErrorMessages;
    protected $m_arrstrFileNames;


    public function setDirectoryName( $strDirectoryName ) {
        $this->m_strDirectoryName = $strDirectoryName;
    }

    public function getDirectoryName() {
        return $this->m_strDirectoryName;
    }

    public function setErrorMessages( $strErrorMessage ) {
        $this->m_arrstrErrorMessages[] = $strErrorMessage;
    }

    public function getErrorMessages() {
        return $this->m_arrstrErrorMessages;
    }

    public function setFiles( $arrstrFiles ) {
        $this->m_arrstrFileNames[] = $arrstrFiles;
    }

    public function getFiles() {
        return $this->m_arrstrFileNames;
    }

    public function getFilesInDirectory() {

        if( false === is_dir( $this->m_strDirectoryName ) ) {
            $this->setErrorMessages("Not a valid Directory.");
            return false;
        }

        $arrstrFilesInDirectory = scandir( $this->m_strDirectoryName );

        $this->setFiles( $arrstrFilesInDirectory );
        
        return true;

    }
}

?>
