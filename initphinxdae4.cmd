cd bin
@REM rem Création de la table des Utilisateurs
cake bake migration CreateUsers email:string:unique:EMAIL_INDEX password created modified deleted:datetime?
@REM rem Création Table des Emails
@REM cake bake migration CreateEmails lbl:string created modified deleted:datetime?
@REM rem Création de la table Jointe "Utilisateur Possède Email"
@REM cake bake migration CreateEmailsUsers email_id:biginteger user_id:biginteger

@REM rem Création de la table arbre des Entités de Regroupement Administratif
@REM cake bake migration CreateEras lbl lbs slug parent_id:biginteger? lft:biginteger rght:biginteger created modified deleted:datetime?

@REM rem Création de la table arbre des Entités de Regroupement Hiérarchique
@REM cake bake migration CreateErhs lbl lbs slug parent_id:biginteger? lft:biginteger rght:biginteger created modified deleted:datetime?


@REM rem Création Table (arbre) des Demandes d'Autorisation d'Embauches
@REM cake bake migration CreateDaes begin_date:date end_date:date? parent_id:biginteger? lft:biginteger rght:biginteger  created_by:biginteger created modified deleted:datetime?
@REM cake bake migration CreateEmails email:string created modified deleted:datetime?
@REM cake bake migration CreateEmails email:string created modified deleted:datetime?

@REM rem -*-*-*-*- Création des Tables de Références
@REM rem STRUCTURE: Elles ont toutes la même.
@REM rem ---------
@REM rem lbl : libellé long. Pour une description…
@REM rem lbs : Libellé court. Servira de clef subrogée…
@REM rem tri : Sert à définir un ordre pré établi. nullable
@REM rem /!\ Penser à ajouter un idex KEY dans le php généré. /!\
@REM rem mdf : booléen servant à interdire toute modification de la ligne.0 par défaut
@REM rem /!\ Penser à modifier la valeur par défaut = 0 dans le php généré. /!\
@REM rem -------
@REM rem Les types de mouvement à enregistrer
@REM cake bake migration CreateTmouvmts lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les types de ConTRats de Travail
@REM cake bake migration CreateTcontrts lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les états de validation
@REM cake bake migration CreateTevaluas lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les indicateurs OUI/NON
@REM cake bake migration CreateIouinons lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les Motifs d'Embauche du PdV Resp. Serv.
@REM cake bake migration CreateTmeresps lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les Motifs d'Embauche du Pdv Paye
@REM cake bake migration CreateTmepayes lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les Motifs d'Embauche du Pdv Admin.
@REM cake bake migration CreateTmeadmis lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les Types de Parution
@REM cake bake migration CreateTparutis lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les Types de Statuts
@REM cake bake migration CreateTstatuts lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les Types de Temps de travail
@REM cake bake migration CreateTtpstrvs lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les Types de Titre Fabriqué
@REM cake bake migration CreateTtitfabs lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem Les Types de Unité Rémunération
@REM cake bake migration CreateTunirems lbl lbs:string:unique:LBS_KEY tri:String?:index mdf:boolean? created modified
@REM rem -*-*-*-*-

@REM rem Création Table des Mouvements Effectués sur  quelque Table que ce soit.Daes en particulier.
@REM rem seq     : Numéro séquentiel du mouvement, nécessaire car parfois sur plusieurs lignes.
@REM rem tmvt_id : Identifiant du type de mouvement, Création, modification, suppression, etc…
@REM rem table   : Nom de la table dont on enregistre le mouvement.
@REM rem ref     : PK de l'entité dont on enregistre le mouvement. l'id technique de tout enregistrement de table.
@REM rem level   : Libellé du niveau de journalisation
@REM rem champ   : Nom du champ dont modifié
@REM rem nval    : Nouvelle valeur attribuée au champ
@REM rem aval    : Ancienne valeur du champ
@REM cake bake migration CreateMvts seq:biginteger:key:SEQ_INDEX tmvt_id:biginteger table:string:key:TABLE_INDEX ref:biginteger champ:string:key:CHAMP_INDEX nval:text? aval:text? msg:text? level:string:key:LEVEL_INDEX created_by:biginteger created
cd ..
