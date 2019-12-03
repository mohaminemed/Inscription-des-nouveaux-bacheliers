$(document).ready(function(){

   var arrLang = new Array();
   arrLang['en'] = new Array();  
   arrLang['fr'] = new Array(); 
    
    
         arrLang['en']['dw'] ='Download Documents';
    arrLang['en']['login'] ='LogIn';
    arrLang['en']['conc'] ='Contest Registration';
    arrLang['en']['home'] ='Home';
    arrLang['en']['about'] ='About us';
    arrLang['en']['hist'] ='Historical';
    arrLang['en']['bourse'] ='Foreign Exchange';
    arrLang['en']['result'] ='Competition results';
    arrLang['en']['despo'] ='Availability';
     arrLang['en']['cnt'] ='Contact Us';
     arrLang['en']['article'] ='Last Article';
     arrLang['en']['str'] ='Other University Structures';
     arrLang['en']['ofc'] ='The Office';
    arrLang['en']['work'] ='University Work';
    arrLang['en']['pub'] ='University Publications';
     arrLang['en']['minister'] ='The Ministry of Higher Education and Scientific Research';
   arrLang['en']['par1']='Is the ministerial department of the Algerian Government charged with implementing the government policy in the fields of higher education and scientific research.This ministry has existed since 1970. It has sometimes been separated into two sectors or demoted to a delegated ministry.The current Minister of Foreign Affairs is Mohamed Mebarki, in office since September 11, 2013 since the Government Abdelmalek Sellal (2).';
     arrLang['en']['par2']='Higher Education was managed by a central directorate at the level of the Ministry of National Education between 1962 and 1971. Scientific Research was initially endowed with a higher council within the same ministry from 1965.The Ministry of Higher Education and Scientific Research was created in the Boumedienne III Government in 1970, it existed until 1983, then again in 1992 and since 1994.Scientific Research will be attached to the Office of the Prime Minister between 1984 and 1990 before knowing a delegation gathering research, technology and the environment between 1990 and 1992.'
     arrLang['en']['tell'] ='Tell us what you feel';
    arrLang['en']['time'] ='Do not hesitate to contact us at any time';
     arrLang['en']['pgm'] =' Erasmus program';
     arrLang['en']['repo'] =' National Portal for Thesis Reporting';
     arrLang['en']['logout'] =' LogOut';
     arrLang['en']['pre'] =' Preregistration';
     arrLang['en']['btn1'] =' Inscribe';
    arrLang['en']['concult'] =' Consultation of the orientation';
     arrLang['en']['btn2'] =' To Consult';
     arrLang['en']['your'] ='Your Speciality is :';
    arrLang['en']['confirm'] ='Confirm';
     arrLang['en']['apeal'] ='To appeal';
    
    
    
    
    
     arrLang['fr']['dw'] ='Telecharger des Documents';
     arrLang['fr']['login'] ='Connecter';
    arrLang['fr']['conc'] ='Inscription Au concours';
    arrLang['fr']['home'] ='Acceuil';
     arrLang['fr']['about'] ='A propos';
    arrLang['fr']['hist'] ='Historque';
    arrLang['fr']['bourse'] ='Bourse Etrangere';
    arrLang['fr']['result'] ='Resultat du Concours';
    arrLang['fr']['despo'] ='Desponibilité';
    arrLang['fr']['cnt'] ='Contactez Nous';
     arrLang['fr']['article'] ='Dernier Article';
     arrLang['fr']['str'] ='Autes Structures D\'université';
     arrLang['fr']['ofc'] ='Les Office';
    arrLang['fr']['work'] ='Les Travaux d\'université';
    arrLang['fr']['pub'] ='Les Publications d\'université';
    arrLang['fr']['minister'] =' Le Ministère de l\'Enseignement Supérieur et de la Recherche Scientifique';
    arrLang['fr']['par1']='Le département ministériel du gouvernement algérien est-il chargé de mettre en œuvre la politique gouvernementale dans les domaines de l\'enseignement supérieur et de la recherche scientifique.Ce ministère existe depuis 1970. Il a parfois été séparé en deux secteurs ou rétrogradé à un ministère délégué. L\'actuel ministre des Affaires étrangères est Mohamed Mebarki, en fonction depuis le 11 septembre 2013 depuis le gouvernement Abdelmalek Sellal (2).';
     arrLang['fr']['par2']='L\'enseignement supérieur a été géré par une direction centrale au niveau du ministère de l\'Education nationale entre 1962 et 1971. La recherche scientifique a d\'abord été dotée d\'un conseil supérieur au sein du même ministère à partir de 1965.Le Ministère de l\'Enseignement Supérieur et de la Recherche Scientifique a été créé dans le gouvernement Boumediene III en 1970, il a existé jusqu\'en 1983, puis de nouveau en 1992 et depuis 1994.La recherche scientifique sera rattachée au Cabinet du Premier ministre entre 1984 et 1990 avant de connaître une délégation rassemblant la recherche, la technologie et l\'environnement entre 1990 et 1992.';
     arrLang['fr']['tell'] ='Dites-nous ce que vous ressentez';
     arrLang['fr']['time'] ='N\'hésitez pas à nous contacter à tout moment';   
    arrLang['fr']['pgm'] =' Programme Erasmus';
    arrLang['fr']['repo'] =' Portail national pour les rapports de thèse';
    arrLang['fr']['logout'] =' Deconnexion';  
    arrLang['fr']['pre'] =' Pré-Inscription';
    arrLang['fr']['btn1'] =' Inscrire';
     arrLang['fr']['concult'] =' La Consultation De l\'Orientation';
     arrLang['fr']['btn2'] =' Consulter';
    arrLang['fr']['confirm'] ='Confirmer';
     arrLang['fr']['apeal'] ='Faire Un recours';
    
    
     $('.translate').click(function(){
     
     
      var lang =$(this).attr('id');
      $('.lang').each(function(index, element){
      
    $(this).text(arrLang[lang][$(this).attr('key')]);    
      
      });     
     
     });
    });