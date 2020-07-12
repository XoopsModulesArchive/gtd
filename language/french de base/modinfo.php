<?php
//$Id: modinfo.php,v 1.65 2005/09/15 19:51:18 eric_juden Exp $
define('_MI_GTD_NAME', 'gtd');
define('_MI_GTD_DESC', "Utilis� pour stocker les demandes d'assistance des utilisateurs");

//Template variables
define('_MI_GTD_TEMP_ADDTICKET', 'Mod�le pour addInscription.php');
define('_MI_GTD_TEMP_SEARCH', 'Mod�le pour search.php');
define('_MI_GTD_TEMP_STAFF_INDEX', 'Mod�le Equipe pour index.php');
define('_MI_GTD_TEMP_STAFF_PROFILE', 'Mod�le pour profile.php');
define('_MI_GTD_TEMP_STAFF_TICKETDETAILS', 'Mod�le Equipe pour ticket.php');
define('_MI_GTD_TEMP_USER_INDEX', 'Mod�le Utilisateur pour index.php');
define('_MI_GTD_TEMP_USER_TICKETDETAILS', 'Mod�le Utilisateur pour ticket.php');
define('_MI_GTD_TEMP_STAFF_RESPONSE', 'Mod�le pour response.php');
define('_MI_GTD_TEMP_LOOKUP', 'Mod�le pour lookup.php');
define("_MI_GTD_TEMP_STAFFREVIEW", "Mod�le pour g�rer un membre de l'�quipe (staffReview.php)");
define("_MI_GTD_TEMP_EDITTICKET", "Mod�le pour �diter un Inscription (editInscription.php)");
define('_MI_GTD_TEMP_EDITRESPONSE', 'Mod�le pour �diter une r�ponse (editResponse.php)');
define('_MI_GTD_TEMP_ANNOUNCEMENT', 'Mod�le pour les annonces');
define('_MI_GTD_TEMP_STAFF_HEADER', 'Mod�le pour les options du menu Equipe');
define('_MI_GTD_TEMP_USER_HEADER', 'Mod�le pour les options du menu Utilisateur');
define('_MI_GTD_TEMP_PRINT', 'Mod�le pour la page impression agr�able des tickets');
define("_MI_GTD_TEMP_STAFF_ALL", "Mod�le pour la page Equipe 'Voir toutes les pages' ");
define('_MI_GTD_TEMP_STAFF_TICKET_TABLE', 'Mod�le afficher les tickets de l\'�quipe');
define('_MI_GTD_TEMP_SETDEPT', 'Mod�le pour le param�trage de la Page D�partement');
define('_MI_GTD_TEMP_SETGENRE', 'Mod�le pour le param�trage de la page Priorit�s');
define('_MI_GTD_TEMP_SETOWNER', 'Mod�le pour le param�trage de la Page Propri�taire');
define('_MI_GTD_TEMP_SETSTATUS', 'Mod�le pour la Page de Param�trage Statuts');
define('_MI_GTD_TEMP_DELETE', 'Mod�le pour la Page du Batch d\'effacement de Inscription');
define('_MI_GTD_TEMP_BATCHRESPONSE', 'Mod�le pour la Page du Batch d\'Ajout de R�ponse');
define('_MI_GTD_TEMP_ANON_ADDTICKET', 'Mod�le pour la page d\'ajout de ticket des anonymes');
define('_MI_GTD_TEMP_ERROR', 'Mod�le pour la page d\'erreur');
define('_MI_GTD_TEMP_EDITSEARCH', 'Mod�le pour �diter une recherche enregistr�e.');
define('_MI_GTD_TEMP_USER_ALL', 'Mod�le pour la page Utilisateur Voir Tout');


// Block variables
define('_MI_GTD_BNAME1', 'Mes Inscriptions Ouverts');
define('_MI_GTD_BNAME1_DESC', 'Affiche la liste des tickets ouverts pour l\'utilisateur');
define('_MI_GTD_BNAME2', 'Inscriptions par D�partement');
define('_MI_GTD_BNAME2_DESC', 'Affiche le nombre de tickets ouverts pour chaque d�partement.');
define('_MI_GTD_BNAME3', 'Derniers Inscriptions Vus');
define('_MI_GTD_BNAME3_DESC', 'Affiche les tickets qu\'un membre de l\'�quipe vient de visualiser r�cemment.');
define('_MI_GTD_BNAME4', 'Actions de Inscription');
define('_MI_GTD_BNAME4_DESC', 'Montrer toutes les action que le membre l\'�quipe peut effectuer sur le ticket');
define('_MI_GTD_BNAME5', 'Actions Principales Gestion de Inscription');
define('_MI_GTD_BNAME5_DESC', 'Affiche les principales actions du syst�me de gestion de ticket');

// Config variables
define('_MI_GTD_TITLE', 'Titre du HelpDesk');
define('_MI_GTD_TITLE_DSC', 'Donnez un nom au HelpDesk :');
define('_MI_GTD_UPLOAD', 'R�pertoire de stockage des fichiers');
define('_MI_GTD_UPLOAD_DSC', 'Chemin o&ugrave; seront stock�s les fichiers attach�s &agrave; un ticket');
define('_MI_GTD_ALLOW_UPLOAD', 'Autoriser l\'envoi de fichiers');
define('_MI_GTD_ALLOW_UPLOAD_DSC', 'Autoriser les utilisateurs &agrave; ajouter un fichier &agrave; leur demande ?');
define('_MI_GTD_UPLOAD_SIZE', 'Taille des fichiers envoy�s');
define('_MI_GTD_UPLOAD_SIZE_DSC', 'Taille Maxi des fichiers envoy�s (en octets)');
define('_MI_GTD_UPLOAD_WIDTH', 'Largeur Maxi');
define('_MI_GTD_UPLOAD_WIDTH_DSC', 'Largeur Maxi des fichiers envoy�s (en pixels)');
define('_MI_GTD_UPLOAD_HEIGHT', 'Hauteur Maxi');
define('_MI_GTD_UPLOAD_HEIGHT_DSC', 'Hauteur Maxi des fichiers envoy�s (en pixels)');
define('_MI_GTD_NUM_TICKET_UPLOADS', 'Nombre maximum de fichiers uploadables');
define('_MI_GTD_NUM_TICKET_UPLOADS_DSC', 'Ceci est le nombre maximum  de fichiers qui peuvent &ecirc;tre joints &agrave; un ticket lors de la soummission d\'un ticket (ceci n\inclu par les fichiers des champs personnalis�s).');
define('_MI_GTD_ANNOUNCEMENTS', 'Sujet des annonces');
//define('_MI_GTD_ANNOUNCEMENTS_DSC', 'C\'est le sujet des annonces pour gtd. Mettez &agrave; jour le module gtd pour voir les nouvelles cat�gories');
define('_MI_GTD_ANNOUNCEMENTS_DSC', "Ceci est le sujet des actualit�s qui poussera les annonces pour gtd. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/gtd/install.php?op=updateTopics\", \"xoops_module_install_gtd\",400, 300);'>Cliquez ici</a> pour mettre &agrave; jour les nouvelles cat�gories.");
define('_MI_GTD_ANNOUNCEMENTS_NONE', '***D�sactiver les annonces***');
define('_MI_GTD_ALLOW_REOPEN', 'Autoriser la r�ouverture d\'un Inscription');
define('_MI_GTD_ALLOW_REOPEN_DSC', 'Autorise les utilisateurs &agrave; r�ouvrir un Inscription sold� ?');
define('_MI_GTD_STAFF_TC', 'Nombre de tickets affich�s pour l\'�quipe');
define('_MI_GTD_STAFF_TC_DSC', 'Combien de tickets doivent &ecirc;tre affich�s pour chaque d�partement ?');
define('_MI_GTD_STAFF_ACTIONS', 'Style des Actions de l\'Equipe');
define('_MI_GTD_STAFF_ACTIONS_DSC', 'Quel style d�sirez vous appliquer aux actions de l\'Equipe ? Inligne-Style est le style par d�faut, Block-Style requiert que vous activiez le bloc des Actions l\'Equipe.');
define('_MI_GTD_ACTION1', 'Style en ligne');
define('_MI_GTD_ACTION2', 'Style en Bloc');
define('_MI_GTD_DEFAULT_DEPT', 'D�partement par d�faut');
define('_MI_GTD_DEFAULT_DEPT_DSC', "Ceci est le d�partement s�lectionn� par d�faut dans la liste &agrave; l'ajout de ticket. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/gtd/install.php?op=updateDepts\", \"xoops_module_install_gtd\",400, 300);'>Cliquez ici</a> pour mettre &agrave; jour les d�partements.");
define('_MI_GTD_OVERDUE_TIME', 'Limite d\'�x�cution en temps allou�e au ticket');
define('_MI_GTD_OVERDUE_TIME_DSC', 'Ceci d�termine le temps dont dispose l\'intervenant afin de cl&ocirc;turer le ticket avant qu\'il ne soit trop tard (en heures).');
define('_MI_GTD_ALLOW_ANON', 'Autoriser les utilisateurs anonymes &agrave; soumettre des tickets');
define('_MI_GTD_ALLOW_ANON_DSC', 'Ceci alloue la cr�ation de ticket sur votre site &agrave; tout le monde. Lorsque les utilisateurs anonymes soumettent un ticket, ils sont aussitot convi�s &agrave; cr�er un compte .');
define('_MI_GTD_APPLY_VISIBILITY', 'Appliquer la visibilit� du d�partement aux membres de l\'�quipe ?');
define('_MI_GTD_APPLY_VISIBILITY_DSC', 'Ceci d�termine si l\'�quipe est limit� &agrave; quelques d�partement lors de la soumission de tickets. si "oui" est s�lectionn�, les membres de l\'�quipe seront limit�s dans leurs soumissions de tickets aux d�partements qui leurs sont attribu�s de part les permissions allou�es &agrave; leur groupe.');
define('_MI_GTD_DISPLAY_NAME', 'Montrer le nom d\'utilisateur ou le nom r�el ?');
define('_MI_GTD_DISPLAY_NAME_DSC', 'Ceci autorise l\'affichage des noms r�els en lieu et place des pseudos comme cela l\'est g�n�ralement (Le pseudo sera montr� s\'il n\'existe pas de nom r�el).');
define('_MI_GTD_USERNAME', 'Pseudo');
define('_MI_GTD_REALNAME', 'Nom r�el');

// Admin Menu variables
define('_MI_GTD_MENU_BLOCKS', 'Gestion des Blocs');
define('_MI_GTD_MENU_MANAGE_DEPARTMENTS', 'Gestion des D�partements');
define('_MI_GTD_MENU_MANAGE_STAFF', 'Gestion des Equipes');
define('_MI_GTD_MENU_MODIFY_EMLTPL', 'Modifier le mod�le des Emails');
define('_MI_GTD_MENU_MODIFY_TICKET_FIELDS', 'Modifier les champs du Inscription');
define('_MI_GTD_MENU_GROUP_PERM', 'Permissions des groupes');
define('_MI_GTD_MENU_ADD_STAFF', 'Ajouter une �quipe');
define('_MI_GTD_MENU_MIMETYPES', 'Gestion des Mimes Types');
define('_MI_GTD_MENU_CHECK_TABLES', 'Contr&ocirc;le des Tables');
define('_MI_GTD_MENU_MANAGE_ROLES', 'Gestion des R&ocirc;les');
define('_MI_GTD_MENU_MAIL_EVENTS', 'Ev�nements d\'email');
define('_MI_GTD_MENU_CHECK_EMAIL', 'Contr&ocirc;ler les Emails');
define('_MI_GTD_MENU_MANAGE_FILES', 'Gestion de fichiers');
define('_MI_GTD_ADMIN_ABOUT', 'A propos');
define('_MI_GTD_TEXT_MANAGE_STATUSES', 'Gestion des �tats');
define('_MI_GTD_TEXT_MANAGE_FIELDS', 'Gestion des champs personnalis�s');
define('_MI_GTD_TEXT_NOTIFICATIONS', 'Gestion de Notifications');

//NOTIFICATION vars
define('_MI_GTD_DEPT_NOTIFY','D�partement');
define('_MI_GTD_DEPT_NOTIFYDSC', 'Options de Notification s\'appliquant &agrave; un d�partement');

define('_MI_GTD_TICKET_NOTIFY','Inscription');
define('_MI_GTD_TICKET_NOTIFYDSC','Option de Notification applicable pour le ticket actuel');

define('_MI_GTD_DEPT_NEWTICKET_NOTIFY', 'Sect : Nouveau Inscription');
define('_MI_GTD_DEPT_NEWTICKET_NOTIFYCAP', 'Me pr�venir lors de la cr�ation d\'un nouveau ticket');
define('_MI_GTD_DEPT_NEWTICKET_NOTIFYDSC', 'Recevoir une notification quand un nouveau ticket est cr��');
define('_MI_GTD_DEPT_NEWTICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscription cr��e - id {TICKET_ID}');
define('_MI_GTD_DEPT_NEWTICKET_NOTIFYTPL', 'dept_newticket_notify.tpl');

define('_MI_GTD_DEPT_REMOVEDTICKET_NOTIFY', 'Sect : Suppression Inscription');
define('_MI_GTD_DEPT_REMOVEDTICKET_NOTIFYCAP', 'Me pr�venir lors de la suppression d\'un ticket');
define('_MI_GTD_DEPT_REMOVEDTICKET_NOTIFYDSC', 'Recevoir une notification quand un ticket est supprim�');
define('_MI_GTD_DEPT_REMOVEDTICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscription supprim�e - id {TICKET_ID}');
define('_MI_GTD_DEPT_REMOVEDTICKET_NOTIFYTPL', 'dept_removedticket_notify.tpl');

define('_MI_GTD_DEPT_MODIFIEDTICKET_NOTIFY', 'Sect : Modification Inscription');
define('_MI_GTD_DEPT_MODIFIEDTICKET_NOTIFYCAP', 'Me pr�venir lors de la modification d\'un ticket');
define('_MI_GTD_DEPT_MODIFIEDTICKET_NOTIFYDSC', 'Recevoir une notification quand un ticket est modifi�');
define('_MI_GTD_DEPT_MODIFIEDTICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscription modifi�e - id {TICKET_ID}');
define('_MI_GTD_DEPT_MODIFIEDTICKET_NOTIFYTPL', 'dept_modifiedticket_notify.tpl');

define('_MI_GTD_DEPT_NEWRESPONSE_NOTIFY', 'Sect : Nouvelle r�ponse');
define('_MI_GTD_DEPT_NEWRESPONSE_NOTIFYCAP', 'Me pr�venir lorsqu\'une r�ponse est apport�e');
define('_MI_GTD_DEPT_NEWRESPONSE_NOTIFYDSC', 'Recevoir une notification quand une r�ponse est apport�e');
define('_MI_GTD_DEPT_NEWRESPONSE_NOTIFYSBJ', 'Gotodance.fr :  R�ponse apport�e au Inscription - id {TICKET_ID}');
define('_MI_GTD_DEPT_NEWRESPONSE_NOTIFYTPL', 'dept_newresponse_notify.tpl');

define('_MI_GTD_DEPT_MODIFIEDRESPONSE_NOTIFY', 'Sect : R�ponse modifi�e');
define('_MI_GTD_DEPT_MODIFIEDRESPONSE_NOTIFYCAP', 'Me pr�venir lorsqu\'une r�ponse est modifi�e');
define('_MI_GTD_DEPT_MODIFIEDRESPONSE_NOTIFYDSC', 'Recevoir une notification quand une r�ponse est modifi�e');
define('_MI_GTD_DEPT_MODIFIEDRESPONSE_NOTIFYSBJ', 'Gotodance.fr :  Inscription R�ponse modifi�e - id {TICKET_ID}');
define('_MI_GTD_DEPT_MODIFIEDRESPONSE_NOTIFYTPL', 'dept_modifiedresponse_notify.tpl');

define('_MI_GTD_DEPT_CHANGEDSTATUS_NOTIFY', 'Sect : Changement d\'Etat d\'un Inscription');
define('_MI_GTD_DEPT_CHANGEDSTATUS_NOTIFYCAP', 'Me pr�venir lorsque L\'Etat du ticket est modifi�');
define('_MI_GTD_DEPT_CHANGEDSTATUS_NOTIFYDSC', 'Recevoir une notification lorsque L\'Etat du ticket est modifi�');
define('_MI_GTD_DEPT_CHANGEDSTATUS_NOTIFYSBJ', 'Gotodance.fr :  Changement d\'Etat d\'un Inscription - id {TICKET_ID}');
define('_MI_GTD_DEPT_CHANGEDSTATUS_NOTIFYTPL', 'dept_changedstatus_notify.tpl');

define('_MI_GTD_DEPT_CHANGEDGENRE_NOTIFY', 'Sect : Changement de Priorit� d\'un Inscription');
define('_MI_GTD_DEPT_CHANGEDGENRE_NOTIFYCAP', 'Me pr�venir lorsque la priorit� d\'un ticket est modifi�e');
define('_MI_GTD_DEPT_CHANGEDGENRE_NOTIFYDSC', 'Recevoir une notification lorsque la priorit� d\'un ticket est modifi�e');
define('_MI_GTD_DEPT_CHANGEDGENRE_NOTIFYSBJ', 'Gotodance.fr :  Changement de priorit� d\'un Inscription - id {TICKET_ID}');
define('_MI_GTD_DEPT_CHANGEDGENRE_NOTIFYTPL', 'dept_changedgenre_notify.tpl');

define('_MI_GTD_DEPT_NEWOWNER_NOTIFY', 'Sect : Nouveau responsable de Inscription');
define('_MI_GTD_DEPT_NEWOWNER_NOTIFYCAP', 'Me pr�venir lorsque le responsable d\'un ticket est modifi�');
define('_MI_GTD_DEPT_NEWOWNER_NOTIFYDSC', 'Recevoir une notification lorsque le responsable dun ticket est modifi�');
define('_MI_GTD_DEPT_NEWOWNER_NOTIFYSBJ', 'Gotodance.fr :  Responsable de Inscription modifi�e - id {TICKET_ID}');
define('_MI_GTD_DEPT_NEWOWNER_NOTIFYTPL', 'dept_newowner_notify.tpl');

define('_MI_GTD_TICKET_REMOVEDTICKET_NOTIFY', 'Inscription : Supprim�e');
define('_MI_GTD_TICKET_REMOVEDTICKET_NOTIFYCAP', 'Me pr�venir lorsque ce ticket est supprim�');
define('_MI_GTD_TICKET_REMOVEDTICKET_NOTIFYDSC', 'Recevoir une notification lorsque ce ticket est supprim�');
define('_MI_GTD_TICKET_REMOVEDTICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscription Supprim�e - id {TICKET_ID}');
define('_MI_GTD_TICKET_REMOVEDTICKET_NOTIFYTPL', 'ticket_removedticket_notify.tpl');

define('_MI_GTD_TICKET_MODIFIEDTICKET_NOTIFY', 'Inscription : Modifi�');
define('_MI_GTD_TICKET_MODIFIEDTICKET_NOTIFYCAP', 'Me pr�venir lorsque ce ticket est modifi�');
define('_MI_GTD_TICKET_MODIFIEDTICKET_NOTIFYDSC', 'Recevoir une notification lorsque ce ticket est modifi�');
define('_MI_GTD_TICKET_MODIFIEDTICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscription modifi�e - id {TICKET_ID}');
define('_MI_GTD_TICKET_MODIFIEDTICKET_NOTIFYTPL', 'ticket_modifiedticket_notify.tpl');

define('_MI_GTD_TICKET_NEWRESPONSE_NOTIFY', 'Inscription : Nouvelle R�ponse');
define('_MI_GTD_TICKET_NEWRESPONSE_NOTIFYCAP', 'Me pr�venir lorsqu\'une r�ponse est cr��e pour ce ticket');
define('_MI_GTD_TICKET_NEWRESPONSE_NOTIFYDSC', 'Recevoir une notification lorsqu\'une r�ponse est cr��e pour ce ticket');
define('_MI_GTD_TICKET_NEWRESPONSE_NOTIFYSBJ', 'Gotodance.fr :  R�ponse cr��e pour ce Inscription - id {TICKET_ID}');
define('_MI_GTD_TICKET_NEWRESPONSE_NOTIFYTPL', 'ticket_newresponse_notify.tpl');

define('_MI_GTD_TICKET_MODIFIEDRESPONSE_NOTIFY', 'Inscription : R�ponse Modifi�e');
define('_MI_GTD_TICKET_MODIFIEDRESPONSE_NOTIFYCAP', 'Me pr�venir lorsqu\'une r�ponse est modifi�e pour ce ticket');
define('_MI_GTD_TICKET_MODIFIEDRESPONSE_NOTIFYDSC', 'Recevoir une notification lorsqu\'une r�ponse est modifi�e pour ce ticket');
define('_MI_GTD_TICKET_MODIFIEDRESPONSE_NOTIFYSBJ', 'Gotodance.fr :  R�ponse &agrave; ce Inscription modifi�e - id {TICKET_ID}');
define('_MI_GTD_TICKET_MODIFIEDRESPONSE_NOTIFYTPL', 'ticket_modifiedresponse_notify.tpl');

define('_MI_GTD_TICKET_CHANGEDSTATUS_NOTIFY', 'Inscription : Changement d\'Etat');
define('_MI_GTD_TICKET_CHANGEDSTATUS_NOTIFYCAP', 'Me pr�venir lorsque l\'Etat de ce ticket est modifi�');
define('_MI_GTD_TICKET_CHANGEDSTATUS_NOTIFYDSC', 'Recevoir une notification lorsque l\'Etat de ce ticket est modifi�');
define('_MI_GTD_TICKET_CHANGEDSTATUS_NOTIFYSBJ', 'Gotodance.fr : Mise � jour de votre inscription - id {TICKET_ID}');
define('_MI_GTD_TICKET_CHANGEDSTATUS_NOTIFYTPL', 'ticket_changedstatus_notify.tpl');

define('_MI_GTD_TICKET_CHANGEDGENRE_NOTIFY', 'Inscription : Changement de Priorit�');
define('_MI_GTD_TICKET_CHANGEDGENRE_NOTIFYCAP', 'Me pr�venir lorsque la priorit� de ce ticket est modifi�e');
define('_MI_GTD_TICKET_CHANGEDGENRE_NOTIFYDSC', 'Recevoir une notification lorsque la priorit� de ce ticket est modifi�e');
define('_MI_GTD_TICKET_CHANGEDGENRE_NOTIFYSBJ', 'Gotodance.fr :  Priorit� du Inscription modifi� - id {TICKET_ID}');
define('_MI_GTD_TICKET_CHANGEDGENRE_NOTIFYTPL', 'ticket_changedgenre_notify.tpl');

define('_MI_GTD_TICKET_NEWOWNER_NOTIFY', 'Inscription : Nouveau Responsable');
define('_MI_GTD_TICKET_NEWOWNER_NOTIFYCAP', 'Me prevenir lorsque le responsable change pour ce ticket');
define('_MI_GTD_TICKET_NEWOWNER_NOTIFYDSC', 'Recevoir une notification lorsque le reponsable de ce ticket est chang�');
define('_MI_GTD_TICKET_NEWOWNER_NOTIFYSBJ', 'Gotodance.fr :  Changement de propr�taire du Inscription - id {TICKET_ID}');
define('_MI_GTD_TICKET_NEWOWNER_NOTIFYTPL', 'ticket_newowner_notify.tpl');

define('_MI_GTD_TICKET_NEWTICKET_NOTIFY', 'Inscription: Nouveau Inscription');
define('_MI_GTD_TICKET_NEWTICKET_NOTIFYCAP', 'Confirmer quand un nouveau ticket est cr��');
define('_MI_GTD_TICKET_NEWTICKET_NOTIFYDSC', 'Recevoir une notification quand un nouveau ticket est cr��');
define('_MI_GTD_TICKET_NEWTICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscription cr�� - id {TICKET_ID}');
define('_MI_GTD_TICKET_NEWTICKET_NOTIFYTPL', 'ticket_newticket_notify.tpl');

define('_MI_GTD_DEPT_CLOSETICKET_NOTIFY', 'Sect : Fermeture de Inscription');
define('_MI_GTD_DEPT_CLOSETICKET_NOTIFYCAP', 'Me pr�venir quand un ticket est clos');
define('_MI_GTD_DEPT_CLOSETICKET_NOTIFYDSC', 'Recevoir une notification quand un ticket est clos');
define('_MI_GTD_DEPT_CLOSETICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscription mise � jour - id {TICKET_ID}');
define('_MI_GTD_DEPT_CLOSETICKET_NOTIFYTPL', 'dept_closeticket_notify.tpl');

define('_MI_GTD_TICKET_CLOSETICKET_NOTIFY', 'Inscription: Fermeture de Inscription');
define('_MI_GTD_TICKET_CLOSETICKET_NOTIFYCAP', 'Confirmer quand un Inscription est clos');
define('_MI_GTD_TICKET_CLOSETICKET_NOTIFYDSC', 'Recevoir une notification quand un Inscription est clos');
define('_MI_GTD_TICKET_CLOSETICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscription mise � jour - id {TICKET_ID}');
define('_MI_GTD_TICKET_CLOSETICKET_NOTIFYTPL', 'ticket_closeticket_notify.tpl');

define('_MI_GTD_TICKET_NEWUSER_NOTIFY', 'Inscription: Nouvel Utilisateur cr�� &agrave; partir d\'une soumission d\'Email');
define('_MI_GTD_TICKET_NEWUSER_NOTIFYCAP', 'Notifie l\'Utilisateur qu\'un nouveau compte a &eacte;t� cr&eacte;�');
define('_MI_GTD_TICKET_NEWUSER_NOTIFYDSC', 'Recevoir une notification quand un nouveau utilisateur est cr�� &agrave; partir d\'une soumission d\'Email');
define('_MI_GTD_TICKET_NEWUSER_NOTIFYSBJ', 'Gotodance.fr :  Nouvel Utilisateur cr��');
define('_MI_GTD_TICKET_NEWUSER_NOTIFYTPL', 'ticket_new_user_byemail.tpl');

define('_MI_GTD_TICKET_NEWUSER_ACT1_NOTIFY', 'Inscription: Nouveau Utiliteur cr��');
define('_MI_GTD_TICKET_NEWUSER_ACT1_NOTIFYCAP', 'Notifie l\'Utilisateur lorsqu\'un nouveau compte vient d\'&ecirc;tre cr��');
define('_MI_GTD_TICKET_NEWUSER_ACT1_NOTIFYDSC', 'Recevoir une notification quand un nouveau utilisateur est cr�� par un email de sousmission (Auto Activation)');
define('_MI_GTD_TICKET_NEWUSER_ACT1_NOTIFYSBJ', 'Gotodance.fr :  Nouveau Utilisateur cr��');
define('_MI_GTD_TICKET_NEWUSER_ACT1_NOTIFYTPL', 'ticket_new_user_activation1.tpl');

define('_MI_GTD_TICKET_NEWUSER_ACT2_NOTIFY', 'Inscription: Nouveau Utilisateur cr��');
define('_MI_GTD_TICKET_NEWUSER_ACT2_NOTIFYCAP', 'Notifie l\'Utilisateur lorsqu\'un nouveau compte vient d\'&ecirc;tre cr��');
define('_MI_GTD_TICKET_NEWUSER_ACT2_NOTIFYDSC', 'Recevoir une notification quand un nouveau utilisateur est cr�� par un email de sousmission (Requiert une Activation d\'Admin)');
define('_MI_GTD_TICKET_NEWUSER_ACT2_NOTIFYSBJ', 'Gotodance.fr :  Nouvel Utilisateur cr��');
define('_MI_GTD_TICKET_NEWUSER_ACT2_NOTIFYTPL', 'ticket_new_user_activation2.tpl');

define('_MI_GTD_TICKET_EMAIL_ERROR_NOTIFY', 'Inscription: Erreur d\'Email');
define('_MI_GTD_TICKET_EMAIL_ERROR_NOTIFYCAP', 'Notifie l\'Utilisateur lorsque son email n\'est pas enregistr�');
define('_MI_GTD_TICKET_EMAIL_ERROR_NOTIFYDSC', 'Recevoir une notification quand l\'email de soumission n\'est pas enregistr�e');
define('_MI_GTD_TICKET_EMAIL_ERROR_NOTIFYSBJ', 'RE: {TICKET_SUBJECT}');
define('_MI_GTD_TICKET_EMAIL_ERROR_NOTIFYTPL', 'ticket_email_error.tpl');

define('_MI_GTD_DEPT_MERGE_TICKET_NOTIFY', 'Sect : Fusion de Inscriptions');
define('_MI_GTD_DEPT_MERGE_TICKET_NOTIFYCAP', 'Notifier moi lorsque des tickets sont fusionn�s');
define('_MI_GTD_DEPT_MERGE_TICKET_NOTIFYDSC', 'recevoir une notification lorsque les tickets sont fusionn�s');
define('_MI_GTD_DEPT_MERGE_TICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscriptions fusionn�s');
define('_MI_GTD_DEPT_MERGE_TICKET_NOTIFYTPL', 'dept_mergeticket_notify.tpl');

define('_MI_GTD_TICKET_MERGE_TICKET_NOTIFY', 'Inscription: Fusion de Inscriptions');
define('_MI_GTD_TICKET_MERGE_TICKET_NOTIFYCAP', 'Notifier moi lorsque des tickets sont fusionn�s');
define('_MI_GTD_TICKET_MERGE_TICKET_NOTIFYDSC', 'Revevoir une notification lorsque des tickets sont fusionn�s');
define('_MI_GTD_TICKET_MERGE_TICKET_NOTIFYSBJ', 'Gotodance.fr :  Inscriptions fusionn�s');
define('_MI_GTD_TICKET_MERGE_TICKET_NOTIFYTPL', 'ticket_mergeticket_notify.tpl');

define('_MI_GTD_TICKET_NEWTICKET_EMAIL_NOTIFY', 'Utilisateur : Nouveau ticket par Email');
define('_MI_GTD_TICKET_NEWTICKET_EMAIL_NOTIFYCAP', 'Confirmation de la cr�ation d\'un nouveau ticket par email');
define('_MI_GTD_TICKET_NEWTICKET_EMAIL_NOTIFYDSC', 'Recevoir une notification lorsqu\'un nouveau ticket est cr�� par email');
define('_MI_GTD_TICKET_NEWTICKET_EMAIL_NOTIFYSBJ', 'RE: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_GTD_TICKET_NEWTICKET_EMAIL_NOTIFYTPL', 'ticket_newticket_byemail_notify.tpl');

// Be sure to add new mail_templates to array in admin/index.php - modifyEmlTpl()
?>