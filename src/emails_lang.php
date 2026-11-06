<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Mises à jour système disponibles';
$lang['emails_updates_available_message'] = <<<EOT
Bonjour,

De nouvelles mises à jour système ont été détectées pour {site_anchor}.

Ces mises à jour peuvent inclure des correctifs de sécurité, des améliorations de performances ou de nouvelles fonctionnalités.
Nous vous recommandons de les examiner dès que possible.

Vous pouvez consulter et gérer les mises à jour disponibles depuis le panneau d’administration :
{link}

Si vous avez déjà consulté ou appliqué les mises à jour, aucune autre action n’est requise.

Il s’agit d’un message système automatisé envoyé par {site_name}.
Veuillez ne pas répondre à cet e-mail.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Activation du compte';
$lang['emails_account_activation_request_message'] = <<<EOT
Salut {name},

Merci de vous être enregistré sur {site_anchor}. Votre compte est créé et doit être activé avant de pouvoir l’utiliser.

Pour activer votre compte, cliquez sur le lien suivant ou copiez-collez-le dans votre navigateur:
{link}

Cordialement,
--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nouveau lien d\'activation';
$lang['emails_account_activation_resend_message'] = <<<EOT
Salut {name},

Vous avez récemment demandé un nouveau lien d’activation sur {site_anchor}, car votre compte n’était pas actif.
Pour activer votre compte, cliquez sur le lien suivant ou copiez-collez-le dans votre navigateur:
{link}

Si vous ne l’avez pas demandé, aucune autre action n’est requise.

Cette action a été demandée depuis cette adresse IP: {ip_link}.

Cordialement,
--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Compte activé';
$lang['emails_account_activation_success_message'] = <<<EOT
Salut {name},

Votre compte sur {site_anchor} a bien été activé. Vous pouvez maintenant <a href="{login_url}" target="_blank" rel="noopener">vous connecter</a> à tout moment.

En espérant que vous apprécierez votre séjour, veuillez accepter nos salutations distinguées.

--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Compte en attente d\'approbation';
$lang['emails_account_approval_pending_message'] = <<<EOT
Salut {name},

Merci de vous être joint à {site_anchor}. Votre compte est créé mais doit être approuvé par un administrateur du site avant d’être actif.
Nous nous excusons sincèrement pour cette étape cruciale, mais ce n’est que pour des raisons de sécurité.

Vous recevrez un email de confirmation dès que votre compte aura été approuvé.

En espérant que vous apprécierez votre séjour, veuillez accepter nos salutations distinguées.

-- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Compte approuvé';
$lang['emails_account_approval_success_message'] = <<<EOT
Bonjour {name},

Bonne nouvelle ! Votre compte sur {site_anchor} vient d’être approuvé.

Vous pouvez maintenant vous connecter et utiliser votre compte immédiatement :
{link}

Nous sommes ravis de vous compter parmi nous.

-- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Compte restauré';
$lang['emails_account_restored_message'] = <<<EOT
Salut {name},

Cet e-mail confirme que votre compte sur {site_anchor} a bien été récupéré.

Bienvenue à nouveau avec nous et nous espérons que cette fois vous apprécierez votre séjour.

Cordialement,
--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Bienvenue sur {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Salut {name},

La plupart des gens ont de très longues phrases de bienvenue après votre inscription sur leur site.

Bonne nouvelle: nous ne sommes pas la plupart des gens.
Mais nous souhaitons tout de même vous accueillir et vous remercier de nous avoir rejoints sur {site_anchor}.

En espérant que vous apprécierez votre séjour, veuillez accepter nos salutations distinguées.
-- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Demande de changement d\'e-mail';
$lang['emails_email_change_request_message'] = <<<EOT
Salut {name},

Vous recevez cet e-mail, car nous avons reçu une demande de changement d’adresse e-mail pour votre compte sur {site_anchor}.

Cliquez sur le lien suivant ou copiez-collez-le dans votre navigateur si vous souhaitez continuer:
{link}

Si vous n’avez pas demandé à changer votre adresse e-mail, aucune autre action n’est requise.

Cette action a été demandée depuis cette adresse IP: {ip_link}.

Cordialement,
--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Adresse e-mail modifiée';
$lang['emails_email_change_success_message'] = <<<EOT
Salut {name},

Cet e-mail confirme que votre adresse e-mail utilisée sur {site_anchor} a bien été modifiée.

Si vous n’avez pas effectué cette action, veuillez nous contacter le plus vite possible pour résoudre ce problème.

Cette action a été effectuée à partir de cette adresse IP: {ip_link}.

Cordialement,
--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Alerte de connexion échouée';
$lang['emails_login_alert_failure_message'] = <<<EOT
Bonjour {name},

Quelqu’un a récemment utilisé des mots de passe incorrects pour tenter de se connecter à votre compte {site_name}.

Date du serveur : {date}
Appareil : {browser}, {platform}
Adresse IP : {ip_link}

Si ce n’était pas vous, ne vous inquiétez pas, la tentative de connexion n’a pas réussi.

Si c’était vous et que vous ne vous souvenez pas de votre mot de passe, cliquez sur le lien ci-dessous pour le réinitialiser :
{reset_link}

Si vous rencontrez des difficultés pour vous connecter à votre compte, contactez notre équipe ou demandez un lien de connexion direct.

--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notification de connexion réussie';
$lang['emails_login_alert_success_message'] = <<<EOT
Bonjour {name},

Nous vous envoyons cet e-mail suite à une connexion réussie à votre compte {site_name}.

Date du serveur : {date}
Appareil : {browser}, {platform}
Adresse IP : {ip_link}

Si vous êtes à l’origine de cette connexion, vous pouvez ignorer cet e-mail.

Si vous n’avez pas effectué cette connexion, veuillez changer immédiatement votre mot de passe pour sécuriser votre compte.

Pour toute assistance, contactez notre équipe de support.

--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Lien de connexion rapide';
$lang['emails_login_magic_link_message'] = <<<EOT
Salut {name},

Vous avez demandé une connexion en un clic à votre compte sur {site_anchor}.

Cliquez sur le lien ci-dessous, ou copiez-collez-le dans votre navigateur, et vous serez connecté instantanément:
{link}

Ce lien expirera dans 15 minutes. Si vous n’avez pas demandé cela, veuillez ignorer cet e-mail.

Cette action a été demandée depuis cette adresse IP: {ip_link}.

Cordialement,
--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Authentification à deux facteurs';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Bonjour {name},

Votre code d’authentification à deux facteurs est : <strong>{code}</strong>

Vous pouvez toujours désactiver l’authentification à deux facteurs dans les paramètres de votre compte.

Cette action a été effectuée à partir de cette adresse IP: {ip_link}.

Cordialement,
--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Demande de réinitialisation du mot de passe';
$lang['emails_password_change_request_message'] = <<<EOT
Salut {name},

Vous recevez cet e-mail, car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte sur {site_anchor}.

Cliquez sur le lien suivant ou copiez-collez-le dans votre navigateur si vous souhaitez continuer:
{link}

Si vous n’avez pas demandé la réinitialisation du mot de passe, aucune autre action n’est requise.

Cette action a été demandée depuis cette adresse IP: {ip_link}.

Cordialement,
--- L’équipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Mot de passe modifié';
$lang['emails_password_change_success_message'] = <<<EOT
Salut {name},

Cet e-mail confirme que votre mot de passe sur {site_anchor} a bien été modifié. Vous pouvez maintenant <a href="{login_url}" target="_blank" rel="noopener">vous connecter</a> en utilisant le nouveau.

Si vous n’avez pas effectué cette action, veuillez nous contacter le plus vite possible pour résoudre ce problème.

Cette action a été effectuée à partir de cette adresse IP: {ip_link}.

Cordialement,
--- L’équipe {site_name}.
EOT;
