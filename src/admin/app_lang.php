<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Composants';
$lang['admin_content'] = 'Contenu';
$lang['admin_database_backup'] = 'Sauvegardes de données';
$lang['admin_extensions'] = 'Extensions';
$lang['admin_firewall'] = 'Pare-feu';
$lang['admin_help'] = 'Aide';
$lang['admin_languages'] = 'Langues';
$lang['admin_logs'] = 'Logs du système';
$lang['admin_media'] = 'Médiathèque';
$lang['admin_modules'] = 'Modules';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Journal d’activité';
$lang['admin_settings'] = 'Paramètres du système';
$lang['admin_sysinfo'] = 'Informations sur le système';
$lang['admin_system'] = 'Système';
$lang['admin_system_firewall'] = 'Pare-feu du système';
$lang['admin_themes'] = 'Thèmes';
$lang['admin_updates'] = 'Mises à jour du système';
$lang['admin_users'] = 'Utilisateurs';
$lang['admin_view_site'] = 'Voir le site';
$lang['per_page'] = 'Éléments par page';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Merci de votre création avec <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Aucun élément actif.} other{<b>#</b> sur <b>%s</b> éléments sont actifs.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Installer';
$lang['admin_install_error'] = 'Échec de l’installation du paquet.';
$lang['admin_install_error_com'] = 'Échec de l’installation : %s';
$lang['admin_install_location_app'] = 'Cette application uniquement';
$lang['admin_install_location_core'] = 'Toutes les applications';
$lang['admin_install_location_select'] = '&#151; Sélectionner l’emplacement &#151;';
$lang['admin_install_success'] = 'Paquet installé avec succès.';
$lang['admin_install_upload'] = 'Téléverser';
$lang['admin_install_upload_error'] = 'Échec du téléversement du paquet.';
$lang['admin_install_upload_success'] = 'Paquet téléversé avec succès.';
$lang['admin_install_upload_tip'] = 'Installez un paquet en téléversant ici son fichier <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Impossible de nettoyer les anciens fichiers de sauvegarde.';
$lang['admin_database_backup_clean_success'] = '%d fichiers de sauvegarde supprimés. %d espace disque libéré.';
$lang['admin_database_backup_create'] = 'Créer une sauvegarde';
$lang['admin_database_backup_create_confirm'] = 'Êtes-vous sûr de vouloir créer une sauvegarde maintenant?';
$lang['admin_database_backup_create_error'] = 'Impossible de créer le fichier de sauvegarde. Assurez-vous que le dossier <b>%s</b> est accessible en écriture.';
$lang['admin_database_backup_create_success'] = 'Le fichier de sauvegarde de la base de données <b>%s</b> créé avec succès.';
$lang['admin_database_backup_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer ces fichiers de sauvegarde?';
$lang['admin_database_backup_delete_error'] = 'Impossible de supprimer les fichiers de sauvegarde sélectionnés.';
$lang['admin_database_backup_delete_success'] = 'Fichiers de sauvegarde supprimés avec succès.';
$lang['admin_database_backup_download_error'] = 'Impossible de télécharger le fichier de sauvegarde sélectionné.';
$lang['admin_database_backup_download_success'] = 'Fichier de sauvegarde téléchargé avec succès.';
$lang['admin_database_backup_lock_confirm'] = 'Êtes-vous sûr de vouloir verrouiller ces fichiers de sauvegarde?';
$lang['admin_database_backup_lock_error'] = 'Impossible de verrouiller les fichiers de sauvegarde sélectionnés.';
$lang['admin_database_backup_lock_success'] = 'Fichiers de sauvegarde verrouillés avec succès.';
$lang['admin_database_backup_locked_error'] = 'Impossible de supprimer les fichiers de sauvegarde verrouillés.';
$lang['admin_database_backup_missing_error'] = 'Le fichier de sauvegarde est introuvable.';
$lang['admin_database_backup_unlock_confirm'] = 'Êtes-vous sûr de vouloir déverrouiller ces fichiers de sauvegarde?';
$lang['admin_database_backup_unlock_error'] = 'Impossible de déverrouiller les fichiers de sauvegarde sélectionnés.';
$lang['admin_database_backup_unlock_success'] = 'Fichiers de sauvegarde déverrouillés avec succès.';
$lang['admin_database_prune'] = 'Nettoyer';
$lang['admin_database_prune_confirm'] = 'Êtes-vous sûr de vouloir nettoyer la base de données? Une sauvegarde sera créée avant l’exécution.';
$lang['admin_database_prune_error'] = 'Impossible de nettoyer la base de données.';
$lang['admin_database_prune_next'] = 'Prochain nettoyage: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Base de données nettoyée avec succès.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Supprimer les logs';
$lang['admin_logs_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer les fichiers de log sélectionnés?';
$lang['admin_logs_delete_error'] = 'Impossible de supprimer les fichiers de log.';
$lang['admin_logs_delete_success'] = 'Fichiers de log supprimés avec succès.';
$lang['admin_logs_error_disabled'] = 'Le système de logs est actuellement désactivé.';
$lang['admin_logs_error_empty'] = 'Aucun journal trouvé.';
$lang['admin_logs_error_missing'] = 'Le fichier de log n’a pas pu être localisé, soit il était vide.';
$lang['admin_logs_tip'] = 'Les fichiers de log peuvent rapidement devenir volumineux. Pensez à supprimer les anciens fichiers de temps à autre.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer les e-mails sélectionnés ?';
$lang['admin_emails_delete_error'] = 'Impossible de supprimer les e-mails sélectionnés.';
$lang['admin_emails_delete_success'] = 'Les e-mails sélectionnés ont été supprimés avec succès.';
$lang['admin_emails_email_from'] = 'Envoyé depuis';
$lang['admin_emails_mail_queue'] = 'File d’attente des e-mails';
$lang['admin_emails_mailer'] = 'Courrier de masse';
$lang['admin_emails_search'] = 'Rechercher des e-mails par objet ou contenu …';
$lang['admin_emails_send_error'] = 'Échec de la mise en file d’attente de l’e-mail. Veuillez réessayer.';
$lang['admin_emails_send_none'] = 'Aucun utilisateur ne correspond aux critères sélectionnés.';
$lang['admin_emails_send_success'] = 'L’e-mail a été mis en file d’attente et sera envoyé prochainement.';
$lang['admin_emails_send_to_banned'] = 'Envoyer aux utilisateurs bannis.';
$lang['admin_emails_send_to_deleted'] = 'Envoyer aux utilisateurs supprimés.';
$lang['admin_emails_send_to_disabled'] = 'Envoyer aux utilisateurs désactivés.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Nouvel utilisateur';
$lang['admin_users_all_users'] = 'Tous les utilisateurs';
$lang['admin_users_ban_confirm'] = 'Êtes-vous sûr de vouloir bannir les utilisateurs sélectionnés?';
$lang['admin_users_ban_error'] = 'Impossible de bannir les utilisateurs sélectionnés.';
$lang['admin_users_ban_success'] = 'Les utilisateurs sélectionnés ont été bannis avec succès.';
$lang['admin_users_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer les utilisateurs sélectionnés?';
$lang['admin_users_delete_error'] = 'Impossible de supprimer les utilisateurs sélectionnés.';
$lang['admin_users_delete_success'] = 'Les utilisateurs sélectionnés ont été supprimés avec succès.';
$lang['admin_users_disable_confirm'] = 'Êtes-vous sûr de vouloir désactiver les utilisateurs sélectionnés?';
$lang['admin_users_disable_error'] = 'Impossible de désactiver les utilisateurs sélectionnés.';
$lang['admin_users_disable_success'] = 'Les utilisateurs sélectionnés ont été désactivés avec succès.';
$lang['admin_users_edit'] = 'Modifier l’utilisateur';
$lang['admin_users_edit_error'] = 'Impossible de mettre à jour le compte.';
$lang['admin_users_edit_success'] = 'Compte mis à jour avec succès.';
$lang['admin_users_enable_confirm'] = 'Êtes-vous sûr de vouloir activer les utilisateurs sélectionnés?';
$lang['admin_users_enable_error'] = 'Impossible d’activer les utilisateurs sélectionnés.';
$lang['admin_users_enable_success'] = 'Les utilisateurs sélectionnés ont été activés avec succès.';
$lang['admin_users_groups'] = 'Groupes';
$lang['admin_users_lock_confirm'] = 'Êtes-vous sûr de vouloir verrouiller les utilisateurs sélectionnés ?';
$lang['admin_users_lock_error'] = 'Impossible de verrouiller les utilisateurs sélectionnés.';
$lang['admin_users_lock_success'] = 'Les utilisateurs sélectionnés ont été verrouillés avec succès.';
$lang['admin_users_logged'] = 'Utilisateurs connectés';
$lang['admin_users_manage'] = 'Gérer les utilisateurs';
$lang['admin_users_remove_confirm'] = 'Êtes-vous sûr de vouloir supprimer définitivement les utilisateurs sélectionnés et toutes leurs données?';
$lang['admin_users_remove_error'] = 'Impossible de supprimer définitivement les utilisateurs sélectionnés et toutes leurs données.';
$lang['admin_users_remove_success'] = 'Les utilisateurs sélectionnés et toutes leurs données ont été supprimés avec uccès.';
$lang['admin_users_restore_confirm'] = 'Êtes-vous sûr de vouloir restaurer les utilisateurs sélectionnés?';
$lang['admin_users_restore_error'] = 'Impossible de restaurer les utilisateurs sélectionnés.';
$lang['admin_users_restore_success'] = 'Les utilisateurs sélectionnés ont été restaurés avec succès.';
$lang['admin_users_search'] = 'Rechercher par nom ou e-mail …';
$lang['admin_users_unban_confirm'] = 'Êtes-vous sûr de vouloir débannir les utilisateurs sélectionnés?';
$lang['admin_users_unban_error'] = 'Impossible de débannir les utilisateurs sélectionnés.';
$lang['admin_users_unban_success'] = 'Les utilisateurs sélectionnés ont été débannis avec succès.';
$lang['admin_users_unlock_confirm'] = 'Êtes-vous sûr de vouloir déverrouiller les utilisateurs sélectionnés ?';
$lang['admin_users_unlock_error'] = 'Impossible de déverrouiller les utilisateurs sélectionnés.';
$lang['admin_users_unlock_success'] = 'Les utilisateurs sélectionnés ont été déverrouillés avec succès.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Vider le journal';
$lang['admin_reports_clear_confirm'] = 'Êtes-vous sûr de vouloir vider le journal des actions?';
$lang['admin_reports_clear_error'] = 'Impossible de vider le journal des actions.';
$lang['admin_reports_clear_success'] = 'Journal des actions vidé avec succès.';
$lang['admin_reports_latest_actions'] = 'Dernières actions';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer les fichiers sélectionnés?';
$lang['admin_media_delete_error'] = 'Impossible de supprimer les fichiers.';
$lang['admin_media_delete_success'] = 'Fichiers supprimés avec succès.';
$lang['admin_media_file_delete_error'] = 'Impossible de supprimer le fichier.';
$lang['admin_media_file_delete_success'] = 'Fichier supprimé avec succès.';
$lang['admin_media_file_update_error'] = 'Impossible de mettre à jour le fichier.';
$lang['admin_media_file_update_success'] = 'Fichier mis à jour avec succès.';
$lang['admin_media_search'] = 'Rechercher par nom, description ou nom de fichier …';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Aucun module actif.} other{<b>#</b> sur <b>%s</b> modules sont actifs.}';
$lang['admin_modules_add'] = 'Ajouter un module';
$lang['admin_modules_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer le module: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Impossible de supprimer le module.';
$lang['admin_modules_delete_success'] = 'Module supprimé avec succès.';
$lang['admin_modules_disable_all_confirm'] = 'Êtes-vous sûr de vouloir désactiver tous les modules ?';
$lang['admin_modules_disable_all_error'] = 'Impossible de désactiver tous les modules.';
$lang['admin_modules_disable_all_success'] = 'Tous les modules ont été désactivés avec succès.';
$lang['admin_modules_disable_confirm'] = 'Êtes-vous sûr de vouloir désactiver le module: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Impossible de désactiver le module.';
$lang['admin_modules_disable_success'] = 'Module désactivé avec succès.';
$lang['admin_modules_enable_all_confirm'] = 'Êtes-vous sûr de vouloir activer tous les modules ?';
$lang['admin_modules_enable_all_error'] = 'Impossible d’activer tous les modules.';
$lang['admin_modules_enable_all_success'] = 'Tous les modules ont été activés avec succès.';
$lang['admin_modules_enable_confirm'] = 'Êtes-vous sûr de vouloir activer le module: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Impossible d’activer le module.';
$lang['admin_modules_enable_success'] = 'Module activé avec succès.';
$lang['admin_modules_install_tip'] = 'Les modules ajoutent de nouvelles fonctionnalités à votre site. Parcourez les modules disponibles dans le <a href="%s" target="_blank" rel="noopener">répertoire des modules</a> ou téléversez un fichier <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Aucun plugin actif.} other{<b>#</b> sur <b>%s</b> plugins sont actifs.}';
$lang['admin_plugins_add'] = 'Ajouter un plugin';
$lang['admin_plugins_delete_confirm'] = 'Voulez-vous vraiment supprimer le plugin : <b>%s</b> ?';
$lang['admin_plugins_delete_error'] = 'Impossible de supprimer le plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin supprimé avec succès.';
$lang['admin_plugins_disable_all_confirm'] = 'Êtes-vous sûr de vouloir désactiver tous les plugins ?';
$lang['admin_plugins_disable_all_error'] = 'Impossible de désactiver tous les plugins.';
$lang['admin_plugins_disable_all_success'] = 'Tous les plugins ont été désactivés avec succès.';
$lang['admin_plugins_disable_confirm'] = 'Voulez-vous vraiment désactiver le plugin : <b>%s</b> ?';
$lang['admin_plugins_disable_error'] = 'Impossible de désactiver le plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin désactivé avec succès.';
$lang['admin_plugins_enable_all_confirm'] = 'Êtes-vous sûr de vouloir activer tous les plugins ?';
$lang['admin_plugins_enable_all_error'] = 'Impossible d’activer tous les plugins.';
$lang['admin_plugins_enable_all_success'] = 'Tous les plugins ont été activés avec succès.';
$lang['admin_plugins_enable_confirm'] = 'Voulez-vous vraiment activer le plugin : <b>%s</b> ?';
$lang['admin_plugins_enable_error'] = 'Impossible d’activer le plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin activé avec succès.';
$lang['admin_plugins_install_tip'] = 'Les plugins enrichissent les fonctionnalités existantes avec des options ou intégrations supplémentaires. Installez-les depuis le <a href="%s" target="_blank" rel="noopener">répertoire des plugins</a> ou téléversez un fichier <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Ajouter un thème';
$lang['admin_themes_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer le thème: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Impossible de supprimer le thème.';
$lang['admin_themes_delete_error_active'] = 'Vous ne pouvez pas supprimer un thème activé.';
$lang['admin_themes_delete_success'] = 'Thème supprimé avec succès.';
$lang['admin_themes_disable_confirm'] = 'Êtes-vous sûr de vouloir désactiver le thème : <b>%s</b> ?';
$lang['admin_themes_disable_error'] = 'Impossible de désactiver le thème.';
$lang['admin_themes_disable_success'] = 'Thème désactivé avec succès.';
$lang['admin_themes_enable_confirm'] = 'Êtes-vous sûr de vouloir activer le thème: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Impossible d’activer le thème.';
$lang['admin_themes_enable_success'] = 'Thème activé avec succès.';
$lang['admin_themes_install_tip'] = 'Les thèmes modifient l’apparence et la mise en page de votre site. Choisissez-en un dans la <a href="%s" target="_blank" rel="noopener">bibliothèque de thèmes</a> ou téléversez un fichier <b>.zip</b>.';
$lang['admin_themes_none_tip'] = 'Cette application fonctionne sans thème. Installez-en un pour personnaliser l’interface publique.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menus';
$lang['admin_menus_assign_error'] = 'Impossible de mettre à jour les emplacements des menus.';
$lang['admin_menus_assign_success'] = 'Emplacements des menus mis à jour avec succès.';
$lang['admin_menus_header'] = 'Il y a <b>%s</b> emplacements de menu disponibles.';
$lang['admin_menus_location'] = 'Emplacement';
$lang['admin_menus_locations'] = 'Emplacements des menus';
$lang['admin_menus_manage'] = 'Gérer les menus';
$lang['admin_menus_menu'] = 'Menu attribué';
$lang['admin_menus_none'] = '&#151; Aucun &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Ajouter une langue';
$lang['admin_languages_default_confirm'] = 'Êtes-vous sûr de vouloir faire de cette langue la langue par défaut du site?';
$lang['admin_languages_default_error'] = 'Impossible de changer la langue par défaut.';
$lang['admin_languages_default_error_nochange'] = 'Cette langue est déjà celle par défaut.';
$lang['admin_languages_default_success'] = 'Langue par défaut changée avec succès.';
$lang['admin_languages_disable_all_confirm'] = 'Êtes-vous sûr de vouloir désactiver toutes les langues?';
$lang['admin_languages_disable_all_error'] = 'Impossible de désactiver toutes les langues.';
$lang['admin_languages_disable_all_success'] = 'Toutes les langues ont été désactivées avec succès.';
$lang['admin_languages_disable_confirm'] = 'Êtes-vous sûr de vouloir désactiver la langue: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Impossible de désactiver la langue.';
$lang['admin_languages_disable_error_default'] = 'La langue par défaut ne peut pas être désactivée.';
$lang['admin_languages_disable_error_nochange'] = 'Cette langue est déjà désactivée.';
$lang['admin_languages_disable_success'] = 'Langue désactivée avec succès.';
$lang['admin_languages_enable_all_confirm'] = 'Êtes-vous sûr de vouloir activer toutes les langues?';
$lang['admin_languages_enable_all_error'] = 'Impossible d’activer toutes les langues.';
$lang['admin_languages_enable_all_success'] = 'Toutes les langues ont été activées avec succès.';
$lang['admin_languages_enable_confirm'] = 'Êtes-vous sûr de vouloir activer la langue: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Impossible d’activer la langue.';
$lang['admin_languages_enable_error_nochange'] = 'Cette langue est déjà activée.';
$lang['admin_languages_enable_success'] = 'Langue activée avec succès.';
$lang['admin_languages_install_tip'] = 'Les langues ajoutent des traductions pour l’interface et le contenu de votre site. Parcourez les langues disponibles dans le <a href="%s" target="_blank" rel="noopener">répertoire des langues</a> ou téléversez un paquet <b>.zip</b> pour installer la vôtre.';
$lang['admin_languages_tip'] = 'Activer, désactiver et définir la langue par défaut du site. Les langues activées sont disponibles pour les visiteurs du site.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'De nouvelles mises à jour sont disponibles !';
$lang['update_backup_error'] = 'Impossible de créer une sauvegarde. La mise à jour a été annulée.';
$lang['update_check_disabled'] = 'La vérification automatique des mises à jour est désactivée. Activez-la pour afficher les mises à jour.';
$lang['update_check_error'] = 'Impossible d’exécuter la vérification des mises à jour pour le moment.';
$lang['update_check_success'] = 'La vérification des mises à jour s’est terminée avec succès.';
$lang['update_install_error'] = 'Le paquet n’a pas pu être installé. La version actuelle a été conservée.';
$lang['update_install_success'] = 'Le paquet a été mis à jour avec succès vers la version la plus récente.';
$lang['update_interval_3days'] = 'Tous les 3 jours';
$lang['update_interval_biweekly'] = 'Toutes les 2 semaines';
$lang['update_interval_daily'] = 'Chaque jour';
$lang['update_interval_monthly'] = 'Une fois par mois';
$lang['update_interval_weekly'] = 'Une fois par semaine';
$lang['update_not_available'] = 'Votre site est à jour.';
$lang['update_rollback_error'] = 'Impossible de restaurer la version précédente. Une intervention manuelle peut être nécessaire.';
$lang['update_rollback_success'] = 'La version précédente a été restaurée avec succès.';
$lang['updates_available'] = 'Mises à jour disponibles';
$lang['updates_check_now'] = 'Vérifier maintenant';
$lang['updates_check_now_confirm'] = 'Êtes-vous sûr de vouloir vérifier les mises à jour maintenant ?';
$lang['updates_current_version'] = 'Version actuelle';
$lang['updates_enable'] = 'Activer les mises à jour';
$lang['updates_last_check'] = 'Dernière vérification : %s';
$lang['updates_latest_version'] = 'Dernière version';
$lang['updates_next_check'] = 'Prochaine vérification planifiée : %s';
$lang['updates_previous_version'] = 'Version précédente';
$lang['updates_recent'] = 'Récemment mis à jour';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Échec du blocage de l’adresse IP spécifiée.';
$lang['admin_firewall_ban_success'] = 'L’adresse IP a été bloquée avec succès.';
$lang['admin_firewall_block_ip'] = 'Bloquer une adresse IP';
$lang['admin_firewall_delete_confirm'] = 'Êtes-vous sûr de vouloir débloquer les adresses IP sélectionnées ?';
$lang['admin_firewall_delete_error'] = 'Échec du déblocage des adresses IP sélectionnées.';
$lang['admin_firewall_delete_success'] = 'Les adresses IP sélectionnées ont été débloquées avec succès.';
$lang['admin_firewall_duration'] = 'Durée du blocage';
$lang['admin_firewall_permanent'] = 'Permanent';
$lang['admin_firewall_reason'] = 'Raison du blocage';
$lang['admin_firewall_tip'] = 'Consultez et gérez les adresses IP bloquées par le pare-feu en raison de violations répétées ou d’activités suspectes.';

// Settings
$lang['404_ban_duration'] = 'Durée du blocage (404)';
$lang['404_threshold'] = 'Limite d’erreurs 404';
$lang['uri_ban_duration'] = 'Durée du blocage (URI)';
$lang['uri_strike_threshold'] = 'Limite d’accès aux URI';
