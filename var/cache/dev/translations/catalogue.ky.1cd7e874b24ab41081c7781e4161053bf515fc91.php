<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ky', array (
  'validators' => 
  array (
    'fos_user.username.already_used' => 'Логин колдонулууда',
    'fos_user.username.blank' => 'Логиниңизди жазыңыз',
    'fos_user.username.short' => 'Логиниңиз биз күткөндөн кыска',
    'fos_user.username.long' => 'Логиниңиз биз күткөндөн узун',
    'fos_user.email.already_used' => 'Email колдонулууда',
    'fos_user.email.blank' => 'Электрондук почтаңызды жазыңыз',
    'fos_user.email.short' => 'Email биз күткөндөн кыска',
    'fos_user.email.long' => 'Email биз күткөндөн узун',
    'fos_user.email.invalid' => 'Email туура эмес форматта',
    'fos_user.password.blank' => 'Сырдык сөзүңүздү жазыңыз',
    'fos_user.password.short' => 'Сырдык сөзүңүз биз күткөндөн кыска',
    'fos_user.password.mismatch' => 'Сырдык сөздөр бири-бирине туура келбейт',
    'fos_user.new_password.blank' => 'Жаңы сырдык сөз жазыңыз',
    'fos_user.new_password.short' => 'Жаңы сырдык сөз биз күткөндөн кыска',
    'fos_user.current_password.invalid' => 'Сырдык сөз туура эмес жазылды',
    'fos_user.group.blank' => 'Жаңы группанын атын жазыңыз',
    'fos_user.group.short' => 'Жаңы группанын аты биз күткөндөн кыска',
    'fos_user.group.long' => 'Жаңы группанын аты биз күткөндөн узун',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Группаны жаңылоо',
    'group.show.name' => 'Группанын аталышы',
    'group.new.submit' => 'Группаны түзүү',
    'group.flash.updated' => 'Группа жаңыланды',
    'group.flash.created' => 'Группа түзүлдү',
    'group.flash.deleted' => 'Группа өчүрүлдү',
    'security.login.username' => 'Колдонуучунун аты',
    'security.login.password' => 'Сырдык сөз',
    'security.login.remember_me' => 'Эске тутуу',
    'security.login.submit' => 'Кирүү',
    'profile.show.username' => 'Колдонуучунун аты',
    'profile.show.email' => 'Электрондук почтасы',
    'profile.edit.submit' => 'Жаңылоо',
    'profile.flash.updated' => 'Колдонуучунун профили жаңыланды',
    'change_password.submit' => 'Сырдык сөздү өзгөртүү',
    'change_password.flash.success' => 'Сырдык сөз өзгөрүлдү',
    'registration.check_email' => 'Кат %email% почтасына жөнөтүлдү. Анын ичинде каттону аныктоочу шилтеме бар.',
    'registration.confirmed' => 'Куттуктайбыз %username%, сиздин аккаунтуңуз ийгиликтүү катталды.',
    'registration.back' => 'Мурунку баракчага кайтуу.',
    'registration.submit' => 'Катталуу',
    'registration.flash.user_created' => 'Колдонуучу ийгиликтүү түзүлдү.',
    'registration.email.subject' => 'Кош келдиңиз, %username%!',
    'registration.email.message' => 'Саламатсызбы, %username%!

 Регистрацияны анныктоо үчүн %confirmationUrl%

 шилтемеси кириңиз.
',
    'resetting.request.username' => 'Колдонуучунун аты',
    'resetting.request.submit' => 'Сырдык сөздү өзгөртүү',
    'resetting.reset.submit' => 'Сырдык сөздү өзгөртүү',
    'resetting.flash.success' => 'Сырдык сөз ийгиликтүү өзгөрдү',
    'resetting.email.subject' => 'Сырдык сөздү өзгөртүү',
    'resetting.email.message' => 'Саламатсызбы, %username%!

 Сырдык сөздү өзгөртүү үчүн, сураныч боюнча кириңиз

Ийгилик каалоо менен,
сайттын командасы.
',
    'layout.logout' => 'Чыгуу',
    'layout.login' => 'Кирүү',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => 'Сиз %username% аты менен кирдиңиз',
    'form.group_name' => 'Группанын аты',
    'form.username' => 'Колдонуучунун аты',
    'form.email' => 'Электрондук почтасы',
    'form.current_password' => 'Учурдагы сырдык сөз',
    'form.password' => 'Сырдык сөз',
    'form.password_confirmation' => 'Сырдык сөздү аныктоо',
    'form.new_password' => 'Жаңы сырдык сөз',
    'form.new_password_confirmation' => 'Сырдык сөздү аныктоо',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used.',
    'fos_user.username.blank' => 'Please enter a username.',
    'fos_user.username.short' => 'The username is too short.',
    'fos_user.username.long' => 'The username is too long.',
    'fos_user.email.already_used' => 'The email is already used.',
    'fos_user.email.blank' => 'Please enter an email.',
    'fos_user.email.short' => 'The email is too short.',
    'fos_user.email.long' => 'The email is too long.',
    'fos_user.email.invalid' => 'The email is not valid.',
    'fos_user.password.blank' => 'Please enter a password.',
    'fos_user.password.short' => 'The password is too short.',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match.',
    'fos_user.new_password.blank' => 'Please enter a new password.',
    'fos_user.new_password.short' => 'The new password is too short.',
    'fos_user.current_password.invalid' => 'The entered password is invalid.',
    'fos_user.group.blank' => 'Please enter a name.',
    'fos_user.group.short' => 'The name is too short.',
    'fos_user.group.long' => 'The name is too long.',
    'fos_group.name.already_used' => 'The name is already used.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated.',
    'group.flash.created' => 'The group has been created.',
    'group.flash.deleted' => 'The group has been deleted.',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated.',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed.',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.
',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully.',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

This link can only be used once to validate your account.

Regards,
the Team.
',
    'resetting.check_email' => 'An email has been sent. It contains a link you must click to reset your password.
Note: You can only request a new password once within %tokenLifetime% hours.

If you don\'t get an email check your spam folder or try again.
',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully.',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Create %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Edit %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} No results found|{1} <strong>1</strong> result found|]1,Inf] <strong>%count%</strong> results found',
    'search.no_results' => 'No results found.',
    'list.row_actions' => 'Actions',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the property is not public',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.signout' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'toggle_navigation' => 'Toggle navigation',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'delete_modal.action' => 'Delete',
    'action.add_new_item' => 'Add a new item',
    'action.add_another_item' => 'Add another item',
    'action.remove_item' => 'Remove the item',
    'errors' => 'Error|Errors',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'show.remaining_items' => '{1} there is another item not displayed in this listing|]1,Inf] %count% other items are not displayed in this listing',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.no_entities_configured' => 'The application is not properly configured.',
    'exception.undefined_entity' => 'The application is not properly configured for this kind of items.',
  ),
  'messages' => 
  array (
    'action.new' => 'Add %entity_name%',
    'action.show' => 'Show',
    'action.edit' => 'Edit',
    'action.search' => 'Search',
    'action.delete' => 'Delete',
    'action.save' => 'Save changes',
    'action.cancel' => 'Cancel',
    'action.list' => 'Back to listing',
    'label.form.empty_value' => 'None',
    '__name__label__' => '__name__label__',
    'coresphere_console.headline.index' => 'Console',
    'coresphere_console.working_directory' => 'Working directory',
    'coresphere_console.environment' => 'Environment',
    'coresphere_console.welcome_message' => 'Type %command% to get a list of all commands.',
    'coresphere_console.loading' => 'Loading...',
    'coresphere_console.suggestion_head' => 'Did you mean:',
    'coresphere_console.empty_response' => 'Complete!',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Download',
    'form.label.delete' => 'Delete?',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
