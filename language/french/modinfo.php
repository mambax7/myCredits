<?php

/**
 * XOOPS - PHP Content Management System
 * Copyright (c) 2004 <https://xoops.org>
 *
 * Module: myCredits 1.0
 * Licence : GPL
 * Authors :
 *           - solo (www.wolfpackclan.com/wolfactory)
 *            - DuGris (www.dugris.info)
 */
define('_MI_MYCREDITS_NAME', 'myCredits');
define('_MI_MYCREDITS_DSC', 'Page de cr�dit de votre site');

// Admin Menus
define('_MI_MYCREDITS_ADMIN', 'Index');
define('_MI_MYCREDITS_PERMS', 'Permissions');
define('_MI_MYCREDITS_BLOCKS', 'Blocks & Groupes');
// Admin Menus
define('_MI_MYCREDITS_MENU_HOME', 'Home');
define('_MI_MYCREDITS_MENU_01', 'Admin');
define('_MI_MYCREDITS_MENU_ABOUT', 'About');

// Blocks
define('_MI_MYCREDITS_BLOCK_LIST', 'Liste des modules');
define('_MI_MYCREDITS_BLOCK_LIST_DESC', '');

//Config
define('_MI_MYCREDITS_EDITOR_ADMIN', 'Editor: Admin');
define('_MI_MYCREDITS_EDITOR_ADMIN_DESC', 'Select the Editor to use by the Admin');
define('_MI_MYCREDITS_EDITOR_USER', 'Editor: User');
define('_MI_MYCREDITS_EDITOR_USER_DESC', 'Select the Editor to use by the User');

//Help
define('_MI_MYCREDITS_DIRNAME', basename(dirname(__DIR__, 2)));
define('_MI_MYCREDITS_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('_MI_MYCREDITS_BACK_2_ADMIN', 'Back to Administration of ');
define('_MI_MYCREDITS_OVERVIEW', 'Overview');

//define('_MI_MYCREDITS_HELP_DIR', __DIR__);

//help multi-page
define('_MI_MYCREDITS_DISCLAIMER', 'Disclaimer');
define('_MI_MYCREDITS_LICENSE', 'License');
define('_MI_MYCREDITS_SUPPORT', 'Support');

// Options
define('_MI_MYCREDITS_TEXTINDEX', 'Introduction');
define('_MI_MYCREDITS_TEXTINDEXDSC', "Texte d'introduction de la page principale");
define('_MI_MYCREDITS_WELCOME', 'Bienvenue dans myCredits. Voici la liste des personnes qui ont contribu� � la r�alisation de ce site.');
define('_MI_MYCREDITS_INDEX_BANNER', "Banni�re de l'index");
define('_MI_MYCREDITS_INDEXDSC_BANNER', "Affiche un logo sur la page d'index. Laisser vide pour ne rien afficher.");

define('_MI_MYCREDITS_PUBLIC', 'Afficher les modules');
define('_MI_MYCREDITS_PUBLICDSC', 'Ordre=0 comme module public');

define('_MI_MYCREDITS_ORDER', 'Afficher les modules tri�s par');
define('_MI_MYCREDITS_ORDERDSC', '');
define('_MI_MYCREDITS_MID', 'Num�ro du module');
define('_MI_MYCREDITS_MNAME', 'Nom');
define('_MI_MYCREDITS_MWEIGHT', 'Ordre');
define('_MI_MYCREDITS_MDIRNAME', 'Dossier');

define('_MI_MYCREDITS_DISPLAY', "Mode d'affichage");
define('_MI_MYCREDITS_DISPLAYDSC', '');
define('_MI_MYCREDITS_TABLE', 'Tableau');
define('_MI_MYCREDITS_LIST', 'Liste (Chaque module est une puce)');
define('_MI_MYCREDITS_BLOCK', 'Block (Chaque module est un block)');
define('_MI_MYCREDITS_SCROLL', '&nbsp;&nbsp;-&nbsp;D�filement auto de bas en haut');
define('_MI_MYCREDITS_MULTIPART', '&nbsp;&nbsp;-&nbsp;Vue s�quentielle (module par module)');
define('_MI_MYCREDITS_BILLBOARD', '&nbsp;&nbsp;-&nbsp;_MI_MYCREDITS_BILLBOARD');
define('_MI_MYCREDITS_NONE', '');

define('_MI_MYCREDITS_HEIGHT', 'Hauteur des blocks dynamiques (en pixel)');
define('_MI_MYCREDITS_HEIGHTDSC', '');

define('_MI_MYCREDITS_DELAY', 'Attente avant le d�filement du block suivant (en seconde)');
define('_MI_MYCREDITS_DELAYDSC', '');

