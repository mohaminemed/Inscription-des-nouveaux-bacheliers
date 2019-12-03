$(document).ready(function(){

   var arrLang = new Array();
   arrLang['en'] = new Array();  
   arrLang['fr'] = new Array();  
   
   arrLang['en']['home'] ='Home';
    arrLang['en']['docum'] ='Documentation';
    arrLang['en']['msg'] ='Messenger';
    arrLang['en']['detProf'] ='Details Profil';
    arrLang['en']['setg'] ='Settings';
    arrLang['en']['changeMp'] ='Change Password';
    arrLang['en']['ajt'] ='Add Speciality';
     arrLang['en']['modf'] ='Update Speciality';
     arrLang['en']['sup'] ='Delete Speciality';
     arrLang['en']['detSpec'] ='Details Speciality';
     arrLang['en']['orint'] ='Orientation';
     arrLang['en']['orintDet'] ='Grap Speciality';
     arrLang['en']['detEtu'] ='Details Student';
     arrLang['en']['recr'] ='Treat A remedy';
     arrLang['en']['site'] ='Opening / closing of site';
     arrLang['en']['ajtAd'] ='Add a new Admin';
     arrLang['en']['dec'] ='logout';
     arrLang['en']['spec'] ='grap a speciality';
     arrLang['en']['addspec'] ='Add a new Speciality';
    arrLang['en']['update'] ='Update A speciality';
    arrLang['en']['code'] =' Specialiy Code';
     arrLang['en']['sup'] ='Delete a speciality';
    arrLang['en']['list'] ='Speciality list';
    arrLang['en']['name'] ='Name Speciality ';
    arrLang['en']['univ'] ='University ';
    arrLang['en']['moy'] ='Average Of Speciality ';
    arrLang['en']['numb'] ='Number of Place ';
    arrLang['en']['list2'] ='Orientation List ';
    arrLang['en']['list3'] ='Students List ';
    arrLang['en']['insc'] ='Subscribe Number ';
    arrLang['en']['nom'] ='Name ';
    arrLang['en']['prenom'] ='First Name ';
     arrLang['en']['location'] ='Speciality Location ';
    arrLang['en']['user'] ='UserName ';
     
   
    
    
    
    
    
    
    
    
    
    
    
    
    arrLang['fr']['home'] ='Acceuil';
    arrLang['fr']['docum'] ='Documentation';
    arrLang['fr']['msg'] ='Messenger';
    arrLang['fr']['detProf'] ='Details de Profil';
   arrLang['fr']['setg'] ='Parametres';
    arrLang['fr']['changeMp'] ='Changer Mot de passe';
    arrLang['fr']['spec'] ='Saisir Specialite';
    arrLang['fr']['ajt'] ='Ajouter Specialte';
     arrLang['fr']['modf'] ='Modifier Specialite';
     arrLang['fr']['sup'] ='Supprimer Specialite';
     arrLang['fr']['detSpec'] ='Details des Specialites';
     arrLang['fr']['orint'] ='Orientation';
     arrLang['fr']['orintDet'] ='Details des  Orientations';
     arrLang['fr']['detEtu'] ='Details Des etudiants';
     arrLang['fr']['recr'] ='Traiter un recours ';
     arrLang['fr']['site'] ='Ouverture / Fermeture de  site';
     arrLang['fr']['ajtAd'] ='Ajouter un nouveau admin';
     arrLang['fr']['dec'] ='Deconnecter';
     arrLang['fr']['addspec'] ='Ajouter une nouvelle specialite';
    arrLang['fr']['update'] ='Modifier une specialité';
     arrLang['fr']['sup'] ='Supprimer une specialité';
    arrLang['fr']['list'] ='La liste des specialites';
       arrLang['fr']['code'] =' Le Code de Specialité ';
     
    arrLang['fr']['name'] ='Le nom de la specialité';
    arrLang['fr']['univ'] ='Université ';
    arrLang['fr']['moy'] ='La moyenne demandé  ';
    arrLang['fr']['numb'] ='Les nombres de postes ';
    arrLang['fr']['list2'] ='La liste D\'orientation ';
    arrLang['fr']['insc'] ='Numéro D\'inscription ';
    arrLang['fr']['nom'] ='Nom';
    arrLang['fr']['prenom'] ='Prenom ';
     arrLang['fr']['location'] =' Location de Specialité';
    arrLang['fr']['user'] ='Nom d\'utilisateur ';
    arrLang['fr']['list3'] ='La Liste des etudiants';
    
     
    
    
    
    
    
    
     $('.translate').click(function(){
     
     
      var lang =$(this).attr('id');
      $('.lang').each(function(index, element){
      
    $(this).text(arrLang[lang][$(this).attr('key')]);    
      
      });     
     
     });
    
});
    