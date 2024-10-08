<?php

  
                    if($this->type = 'epreuve_simple'){
                    $bord_query= $pdo->query("SELECT * FROM epreuves WHERE id= {$this->id_element}");
                    $bord_query->setFetchMode(PDO::FETCH_ASSOC);
                    $bord = $bord_query->fetch();
                    $this->section = $this->section($bord->id_section)->section;
                    $this->filiere = $this->filiere($bord->id_filiere)->filiere;
                    $this->classe = $this->classe_tri($bord->id_classe)->classe;
                    $this->matiere = $this->matiere_tri($bord->id_matiere)->matiere;
                    }
                    elseif($this->type = 'video_simple'){
                    dd('aqsx');
                    $bord_query= $pdo->query("SELECT * FROM schoolVideos WHERE id= {$this->id_element}");
                    
                    $bord_query->setFetchMode(PDO::FETCH_ASSOC);
                    $bord = $bord_query->fetch();
                    
                    $this->section = $this->section($bord->id_section)->section;
                    $this->filiere = $this->filiere($bord->id_filiere)->filiere;
                    $this->classe = $this->classe_tri($bord->id_classe)->classe;
                    $this->matiere = $this->matiere_tri($bord->id_matiere)->matiere;
                }

if($h == 'sfds'){

}else{
    $this->access_corrige = true;
}
            
                