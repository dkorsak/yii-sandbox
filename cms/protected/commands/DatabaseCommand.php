<?php

class DatabaseCommand extends Command
{
    
    
    public function actionIndex()
    {
        return $this->getHelp();
    }

    public function getHelp()
    {
        echo 'TODO'."\n";
    }
}
    