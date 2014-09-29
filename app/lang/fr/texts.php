<?php 

return array(

  // client
  'organization' => 'Entreprise',
  'name' => 'Nom',
  'website' => 'Site web',
  'work_phone' => 'Téléphone',
  'address' => 'Adresse',
  'address1' => 'Rue',
  'address2' => 'Appt/Batîment',
  'city' => 'Ville',
  'state' => 'Région/Département',
  'postal_code' => 'Code Postal',
  'country_id' => 'Pays',
  'contacts' => 'Informations de contact', //if you speak about contact details
  'first_name' => 'Prénom',
  'last_name' => 'Nom',
  'phone' => 'Téléphone',
  'email' => 'Email',
  'additional_info' => 'Informations complémentaires',
  'payment_terms' => 'Conditions de paiement',
  'currency_id' => 'Devise',
  'size_id' => 'Taille',
  'industry_id' => 'Secteur', // literal translation : Industrie
  'private_notes' => 'Note personnelle',

  // invoice
  'invoice' => 'Facture',
  'client' => 'Client',
  'invoice_date' => 'Date de la facture',
  'due_date' => 'Date d\'échéance',
  'invoice_number' => 'Numéro de facture',
  'invoice_number_short' => 'Facture #',
  'po_number' => 'Numéro du bon de commande',
  'po_number_short' => 'Bon de commande #',
  'frequency_id' => 'Fréquence', //litteral translation : Combien de fois 
  'discount' => 'Remise', //can be "rabais" or "réduction"
  'taxes' => 'Taxes',
  'tax' => 'Taxe',
  'item' => 'Ligne', //I'm not sure, I need the context : screenshot ? 
  'description' => 'Description',
  'unit_cost' => 'Coût à l\'unité',
  'quantity' => 'Quantité',
  'line_total' => 'Total',
  'subtotal' => 'Total',
  'paid_to_date' => 'Versé à ce jour',//this one is not very used in France
  'balance_due' => 'Montant total',//can be "Montant à verser" or "Somme totale"
  'invoice_design_id' => 'Design', //if you speak about invoice's design -> "Modèle"
  'terms' => 'Conditions',
  'your_invoice' => 'Votre Facture',

  'remove_contact' => 'Supprimer un contact',
  'add_contact' => 'Ajouter un contact',
  'create_new_client' => 'Ajouter un nouveau client',
  'edit_client_details' => 'Modifier les informations du client',
  'enable' => 'Autoriser',
  'learn_more' => 'En savoir +',
  'manage_rates' => 'Gérer les taux',
  'note_to_client' => 'Commentaire pour le client',
  'invoice_terms' => 'Conditions de facturation',
  'save_as_default_terms' => 'Sauvegarder comme conditions par défaut',
  'download_pdf' => 'Télécharger le PDF',
  'pay_now' => 'Payer maintenant',
  'save_invoice' => 'Sauvegarder la facture',
  'clone_invoice' => 'Dupliquer la facture',
  'archive_invoice' => 'Archiver la facture',
  'delete_invoice' => 'Supprimer la facture',
  'email_invoice' => 'Envoir la facture par email',
  'enter_payment' => 'Saisissez un paiement',
  'tax_rates' => 'Taux d\'imposition',
  'rate' => 'Taux',
  'settings' => 'Paramètres',
  'enable_invoice_tax' => 'Spécifier une <br>taxe pour la facture</b>',
  'enable_line_item_tax' => 'Spécifier une <b>taxe pour chaque ligne</b>',

  // navigation
  'dashboard' => 'Tableau de bord',
  'clients' => 'Clients',
  'invoices' => 'Factures',
  'payments' => 'Paiements',
  'credits' => 'Credits',
  'history' => 'Historique',
  'search' => 'Rechercher',
  'sign_up' => 'S\'enregistrer',
  'guest' => 'Invité',
  'company_details' => 'Informations sur l\'entreprise',
  'online_payments' => 'Paiements en ligne',
  'notifications' => 'Notifications',
  'import_export' => 'Import/Export',
  'done' => 'Valider',
  'save' => 'Sauvegarder',
  'create' => 'Créer',
  'upload' => 'Envoyer',
  'import' => 'Import',
  'download' => 'Télécharger',
  'cancel' => 'Annuler',
  'close' => 'Fermer',
  'provide_email' => 'Veuillez renseigner une adresse email valide',
  'powered_by' => 'Propulsé par',
  'no_items' => 'Aucun élément',

  // recurring invoices
  'recurring_invoices' => 'Factures récurrentes',
  'recurring_help' => '<p>Envoyer automatiquement la même facture à vos clients de façon hebdomadaire, bimensuelle, mensuelle, trimestrielle ou annuelle.</p>
        <p>Utiliser :MONTH, :QUARTER ou :YEAR pour des dates dynamiques. Les opérations simples fonctionnent également, par exemple :MONTH-1.</p>
        <p>Exemples de variables dynamiques pour les factures:</p>
        <ul>
          <li>"Adhésion au club de gym pour le mois de :MONTH" => "Adhésion au club de gym pour le mois de Juillet"</li>
          <li>":YEAR+1 - abonnement annuel" => "2015 - abonnement annuel"</li>
          <li>"Acompte pour le :QUARTER+1" => "Acompte pour le Q2"</li>
        </ul>',

  // dashboard
  'in_total_revenue' => 'de bénéfice total',
  'billed_client' => 'client facturé',
  'billed_clients' => 'clients facturés',
  'active_client' => 'client actif',
  'active_clients' => 'clients actifs',  
  'invoices_past_due' => 'Date limite de paiement dépassée',
  'upcoming_invoices' => 'Factures à venir',
  'average_invoice' => 'Moyenne de facturation',
  
  // list pages
  'archive' => 'Archive',
  'delete' => 'Delete',
  'archive_client' => 'Archive client',
  'delete_client' => 'Delete client',
  'archive_payment' => 'Archive payment',
  'delete_payment' => 'Delete payment',
  'archive_credit' => 'Archive credit',
  'delete_credit' => 'Delete credit',
  'show_archived_deleted' => 'Show archived/deleted',
  'filter' => 'Filter',
  'new_client' => 'New Client',
  'new_invoice' => 'New Invoice',
  'new_payment' => 'New Payment',
  'new_credit' => 'New Credit',
  'contact' => 'Contact',
  'date_created' => 'Date Created',
  'last_login' => 'Last Login',
  'balance' => 'Balance',
  'action' => 'Action',
  'status' => 'Status',
  'invoice_total' => 'Invoice Total',
  'frequency' => 'Frequency',
  'start_date' => 'Start Date',
  'end_date' => 'End Date',
  'transaction_reference' => 'Transaction Reference',
  'method' => 'Method',
  'payment_amount' => 'Payment Amount',
  'payment_date' => 'Payment Date',
  'credit_amount' => 'Credit Amount',
  'credit_balance' => 'Credit Balance',
  'credit_date' => 'Credit Date',
  'empty_table' => 'No data available in table',
  'select' => 'Select',
  'edit_client' => 'Edit Client',
  'edit_invoice' => 'Edit Invoice',

  // client view page
  'create_invoice' => 'Créer une facture',
  'enter_credit' => 'Saisissez un crédit',
  'last_logged_in' => 'Dernière connexion',
  'details' => 'Détails',
  'standing' => 'En attente',
  'credit' => 'Crédit',
  'activity' => 'Activité',
  'date' => 'Date',
  'message' => 'Message',
  'adjustment' => 'Réglements',
  'are_you_sure' => 'Voulez-vous vraiment effectuer cette action ?',

  // payment pages
  'payment_type_id' => 'Type de paiement',
  'amount' => 'Montant',

  // account/company pages
  'work_email' => 'Email',
  'language_id' => 'Langage',
  'timezone_id' => 'Fuseau horaire',
  'date_format_id' => 'Format de la date',
  'datetime_format_id' => 'Format Date/Heure',
  'users' => 'Utilisateurs',
  'localization' => 'Localisation',
  'remove_logo' => 'Supprimer le logo',
  'logo_help' => 'Formats supportés: JPEG, GIF et PNG. Hauteur recommandé: 120px',
  'payment_gateway' => 'Passerelle de paiement',
  'gateway_id' => 'Fournisseur',
  'email_notifications' => 'Notifications par email',
  'email_sent' => 'm\'envoyer un email quand une facture est <b>envoyée</b>',
  'email_viewed' => 'm\'envoyer un email quand une facture est <b>vue</b>',
  'email_paid' => 'm\'envoyer un email quand une facture est <b>payée</b>',
  'site_updates' => 'Mises à jour du site',
  'custom_messages' => 'Messages personnalisés',
  'default_invoice_terms' => 'Définir comme les conditions par défaut',
  'default_email_footer' => 'Définir comme la signature d\'email par défaut',
  'import_clients' => 'Importer des données clients',
  'csv_file' => 'Sélectionner un fichier CSV',
  'export_clients' => 'Exporter des données clients',
  'select_file' => 'Veuillez sélectionner un fichier',
  'first_row_headers' => 'Utiliser la première ligne comme en-tête',
  'column' => 'Colonne',
  'sample' => 'Exemple',
  'import_to' => 'Importer en tant que',
  'client_will_create' => 'client sera créé',
  'clients_will_create' => 'clients seront créés',

  // application messages
  'created_client' => 'Client créé avec succès',
  'created_clients' => ':count clients créés ave csuccès',
  'updated_settings' => 'paramètres mis à jour avec succès',
  'removed_logo' => 'Logo supprimé avec succès',
  'sent_message' => 'Message envoyé avec succès',
  'invoice_error' => 'Veuillez vous assurer de sélectionner un client et de corriger les erreurs',
  'limit_clients' => 'Désolé, cela dépasse la limite de :count clients',
  'payment_error' => 'Il y a eu une erreur lors du traitement de votre paiement. Veuillez réessayer ultérieurement',
  'registration_required' => 'Veuillez vous enregistrer pour envoyer une facture par email',
  'confirmation_required' => 'Veuillez confirmer votre adresse email',

  'updated_client' => 'Client modifié avec succès',
  'created_client' => 'Client créé avec succès',
  'archived_client' => 'Client archivé avec succès',
  'archived_clients' => ':count clients archivés avec succès',
  'deleted_client' => 'Client supprimé avec succès',
  'deleted_clients' => ':count clients supprimés avec succès',

  'updated_invoice' => 'Facture modifiée avec succès',
  'created_invoice' => 'Facture créée avec succès',
  'cloned_invoice' => 'Facture dupliquée avec succès',
  'emailed_invoice' => 'Facture envoyée par email avec succès',
  'and_created_client' => 'et client créé',
  'archived_invoice' => 'Facture archivée avec succès',
  'archived_invoices' => ':count factures archivées avec succès',
  'deleted_invoice' => 'Facture supprimée avec succès',
  'deleted_invoices' => ':count factures supprimées avec succès',

  'created_payment' => 'Paiement créé avec succès',
  'archived_payment' => 'Paiement archivé avec succès',
  'archived_payments' => ':count paiement archivés avec succès',
  'deleted_payment' => 'Paiement supprimé avec succès',
  'deleted_payments' => ':count paiement supprimés avec succès',
  'applied_payment' => 'Paiement appliqué avec succès',

  'created_credit' => 'Crédit créé avec succès',
  'archived_credit' => 'Crédit archivé avec succès',
  'archived_credits' => ':count crédits archivés avec succès',
  'deleted_credit' => 'Crédit supprimé avec succès',
  'deleted_credits' => ':count crédits supprimés avec succès',

    // Emails
  'confirmation_subject' => 'Validation du compte invoice ninja',
  'confirmation_header' => 'Validation du compte',
  'confirmation_message' => 'Veuillez cliquer sur le lien ci-après pour valider votre compte.',
  'invoice_subject' => 'Nouvelle facture en provenance de :account',
  'invoice_message' => 'Pour voir votre facture de :amount, Cliquez sur le lien ci-après.',
  'payment_subject' => 'Paiement reçu',
  'payment_message' => 'Merci pour votre paiement d\'un montant de :amount',
  'email_salutation' => 'Cher :name,',
  'email_signature' => 'Cordialement,',
  'email_from' => 'L\'équipe InvoiceNinja',
  'user_email_footer' => 'Pour modifier vos paramètres de notification par email, veuillez visiter '.SITE_URL.'/company/notifications',
  'invoice_link_message' => 'Pour voir la facture de votre client cliquez sur le lien ci-après :',
  'notification_invoice_paid_subject' => 'La facture :invoice a été payée par le client :client',
  'notification_invoice_sent_subject' => 'La facture :invoice a été envoyée au client :client',
  'notification_invoice_viewed_subject' => 'La facture :invoice a été vue par le client :client',
  'notification_invoice_paid' => 'Un paiement de :amount a été effectué par le client :client concernant la facture :invoice.',
  'notification_invoice_sent' => 'Le client suivant :client a reçu par email la facture :invoice d\'un montant de :amount',
  'notification_invoice_viewed' => 'Le client suivant :client a vu la facture :invoice d\'un montant de :amount',
  'reset_password' => 'Vous pouvez réinitialiser votre mot de passe en cliquant sur le lien suivant :',
  'reset_password_footer' => 'Si vous n\'avez pas effectué de demande de réinitalisation de mot de passe veuillez contacter notre support :' . CONTACT_EMAIL,

  // Payment page
  'secure_payment' => 'Paiement sécurisé',
  'card_number' => 'Numéro de carte',
  'expiration_month' => 'Mois d\'expiration',  
  'expiration_year' => 'Année d\'expiration',
  'cvv' => 'CVV',

  // Security alerts
  'confide' => array(
    'too_many_attempts' => 'Trop de tentatives. Essayez à nouveau dans quelques minutes.',
    'wrong_credentials' => 'Email ou mot de passe incorrect',
    'confirmation' => 'Votre compte a été validé !',
    'wrong_confirmation' => 'Code de confirmation incorrect.',
    'password_forgot' => 'Les informations de réinitialisation de votre mot de passe vous ont été envoyées par email.',
    'password_reset' => 'Votre mot de passe a été modifié avec succès.',
    'wrong_password_reset' => 'Mot de passe incorrect. Veuillez réessayer',
  ),

  // Pro Plan
  'pro_plan' => [
    'remove_logo' => ':link pour supprimer le logo Invoice Ninja en souscrivant au plan pro',
    'remove_logo_link' => 'Cliquez ici',
  ],

  'logout' => 'Se déconnecter',    
  'sign_up_to_save' => 'Connectez vous pour sauvegarder votre travail',  
  'agree_to_terms' =>'J\'accepte les conditions d\'utilisation d\'Invoice ninja :terms',
  'terms_of_service' => 'Conditions d\'utilisation',
  'email_taken' => 'L\'adresse email est déjà existante',
  'working' => 'En cours',
  'success' => 'Succès',
  'success_message' => 'Inscription réussie avec succès. Veuillez cliquer sur le lien dans l\'email de confirmation de compte pour vérifier votre adresse email.',
  'erase_data' => 'Cela supprimera vos données de façon permanente.',
  'password' => 'Mot de passe',

  'pro_plan_product' => 'Plan Pro',
  'pro_plan_description' => 'Inscription d\'une durée d\'un an au Plan Pro d\'Invoice ninja',
  'pro_plan_success' => 'Merci pour votre inscription ! Une fois la facture réglée, votre adhésion au Plan Pro commencera.',

  'unsaved_changes' => 'You have unsaved changes',
  'custom_fields' => 'Custom fields',
  'company_fields' => 'Company Fields',
  'client_fields' => 'Client Fields',
  'field_label' => 'Field Label',
  'field_value' => 'Field Value',
  'edit' => 'Edit',
  'view_as_recipient' => 'View as recipient',    

  // product management
  'product_library' => 'Product Library',
  'product' => 'Product',
  'products' => 'Products',
  'fill_products' => 'Auto-fill products',
  'fill_products_help' => 'Selecting a product will automatically <b>set the description and cost</b>',
  'update_products' => 'Auto-update products',
  'update_products_help' => 'Updating an invoice will automatically <b>update the products</b>',
  'create_product' => 'Create Product',
  'edit_product' => 'Edit Product',
  'archive_product' => 'Archive Product',
  'updated_product' => 'Successfully updated product',
  'created_product' => 'Successfully created product',
  'archived_product' => 'Successfully archived product',

  'chart_builder' => 'Chart Builder',
  'ninja_email_footer' => 'Use :site to invoice your clients and get paid online for free!',
  'go_pro' => 'Go Pro',

  // Quotes
  'quote' => 'Quote',
  'quotes' => 'Quotes',
  'quote_number' => 'Quote Number',
  'quote_number_short' => 'Quote #',
  'quote_date' => 'Quote Date',
  'quote_total' => 'Quote Total',
  'your_quote' => 'Your Quote',
  'total' => 'Total',
  'clone' => 'Clone',

  'new_quote' => 'New Quote',
  'create_quote' => 'Create Quote',
  'edit_quote' => 'Edit Quote',
  'archive_quote' => 'Archive Quote',
  'delete_quote' => 'Delete Quote',
  'save_quote' => 'Save Quote',
  'email_quote' => 'Email Quote',
  'clone_quote' => 'Clone Quote',
  'convert_to_invoice' => 'Convert to Invoice',
  'view_invoice' => 'View Invoice',
  'view_quote' => 'View Quote',
  'view_client' => 'View Client',

  'updated_quote' => 'Successfully updated quote',
  'created_quote' => 'Successfully created quote',
  'cloned_quote' => 'Successfully cloned quote',
  'emailed_quote' => 'Successfully emailed quote',
  'archived_quote' => 'Successfully archived quote',
  'archived_quotes' => 'Successfully archived :count quotes',
  'deleted_quote' => 'Successfully deleted quote',
  'deleted_quotes' => 'Successfully deleted :count quotes',
  'converted_to_invoice' => 'Successfully converted quote to invoice',

  'quote_subject' => 'New quote from :account',
  'quote_message' => 'To view your quote for :amount, click the link below.',
  'quote_link_message' => 'To view your client quote click the link below:',
  'notification_quote_sent_subject' => 'Quote :invoice was sent to :client',
  'notification_quote_viewed_subject' => 'Quote :invoice was viewed by :client',
  'notification_quote_sent' => 'The following client :client was emailed Quote :invoice for :amount.',
  'notification_quote_viewed' => 'The following client :client viewed Quote :invoice for :amount.',  

  'session_expired' => 'Your session has expired.',

  'invoice_fields' => 'Invoice Fields',
  'invoice_options' => 'Invoice Options',
  'hide_quantity' => 'Hide quantity',
  'hide_quantity_help' => 'If your line items quantities are always 1, then you can declutter invoices by no longer displaying this field.',
  'hide_paid_to_date' => 'Hide paid to date',
  'hide_paid_to_date_help' => 'Only display the "Paid to Date" area on your invoices once a payment has been received.',

  'charge_taxes' => 'Charge taxes',
  'user_management' => 'User Management',
  'add_user' => 'Add User',
  'send_invite' => 'Send invitation',
  'sent_invite' => 'Successfully sent invitation',
  'updated_user' => 'Successfully updated user',
  'invitation_message' => 'You\'ve been invited by :invitor. ',
  'register_to_add_user' => 'Please sign up to add a user',
  'user_state' => 'State',
  'edit_user' => 'Edit User',
  'delete_user' => 'Delete User',
  'active' => 'Active',
  'pending' => 'Pending',
  'deleted_user' => 'Successfully deleted user',
  'limit_users' => 'Sorry, this will exceed the limit of ' . MAX_NUM_USERS . ' users',

  'confirm_email_invoice' => 'Are you sure you want to email this invoice?',
  'confirm_email_quote' => 'Are you sure you want to email this quote?',
  'confirm_recurring_email_invoice' => 'Are you sure you want this invoice emailed?',

  'cancel_account' => 'Cancel Account',
  'cancel_account_message' => 'Warning: This will permanently erase all of your data, there is no undo.',
  'go_back' => 'Go Back',

);
