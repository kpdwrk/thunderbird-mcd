<?php
print <<<END
try {
  pref("mail.accountmanager.accounts", "account1");
  lockPref("mail.server.server1.type", "$mail_server_type");
  lockPref("mail.server.server1.hostname", "$mail_domain");
  lockPref("mail.server.server1.realhostname", "$mail_domain");
  lockPref("mail.server.server1.port", $mail_server_port);
  lockPref("mail.server.server1.socketType", 2);
  lockPref("mail.server.server1.name", "$ldap_mail");
  lockPref("mail.server.server1.userName", "$ldap_mail");
  lockPref("mail.server.server1.realuserName", "$ldap_mail");
  lockPref("mail.server.server1.login_at_startup", true);
  lockPref("mail.server.server1.isSecure", true);
  lockPref("mail.server.server1.downloadByDate", false);
  lockPref("mail.server.server1.downloadUnreadOnly", false);
  lockPref("mail.server.server1.keepUnreadOnly", false);
  lockPref("mail.server.server1.offline_download", false);
  lockPref("mail.server.server1.check_new_mail", true);
  lockPref("mail.server.server1.empty_trash_on_exit", false);
  lockPref("mail.server.server1.moveOnSpam", true);
  lockPref("mail.server.server1.purgeSpam", true);
  lockPref("mail.server.server1.spamActionTargetAccount", "imap://$ldap_mail_replaced@$mail_domain");
  lockPref("mail.server.server1.whiteListAbURI", "moz-abmdbdirectory://abook.mab moz-abmdbdirectory://history.mab");
  lockPref("mail.server.server1.check_time", 3);
  lockPref("mail.account.account1.server", "server1");
  lockPref("mail.smtpserver.smtp1.hostname", "$mail_domain");
  lockPref("mail.smtpserver.smtp1.port", $mail_smtp_port);
  lockPref("mail.smtpserver.smtp1.description", "$mail_smtp_desc");
  lockPref("mail.smtpserver.smtp1.try_ssl", 2);
  lockPref("mail.smtpserver.smtp1.auth_method", 3);
  lockPref("mail.smtpserver.smtp1.username", "$ldap_mail");
  pref("mail.smtpservers", "smtp1");
  pref("mail.account.account1.identities", "id1");
  lockPref("mail.accountmanager.localfoldersserver", "server1");
  lockPref("mail.accountmanager.defaultaccount", "account1");
  lockPref("mail.identity.id1.fullName", "$ldap_givenname_exploded $ldap_sn");
  lockPref("mail.identity.id1.useremail", "$ldap_mail");
  lockPref("mail.identity.id1.valid", true);
  lockPref("mail.identity.id1.smtpServer", "smtp1");
  lockPref("mail.identity.id1.organization", "$mail_identity_org");
  lockPref("mail.identity.id1.archive_folder", "imap://$ldap_mail_replaced@$mail_domain/Archives");
  lockPref("mail.identity.id1.draft_folder", "imap://$ldap_mail_replaced@$mail_domain/Drafts");
  lockPref("mail.identity.id1.drafts_folder_picker_mode", 0);
  lockPref("mail.identity.id1.fcc_folder", "imap://$ldap_mail_replaced@$mail_domain/Sent");
  lockPref("mail.identity.id1.fcc_folder_picker_mode", 0);
  lockPref("mail.identity.id1.stationery_folder", "imap://$ldap_mail_replaced@$mail_domain/Templates");
  lockPref("mail.identity.id1.reply_on_top", 1);
  lockPref("ldap_2.servers._nonascii.auth.dn", "");
  lockPref("ldap_2.servers._nonascii.auth.saslmech", "");
  lockPref("ldap_2.servers._nonascii.description", "$ldap_nonascii_desc");
  lockPref("ldap_2.servers._nonascii.filename", "ldap.mab");
  lockPref("ldap_2.servers._nonascii.maxHits", 50);
  lockPref("ldap_2.servers._nonascii.uri", "$ldap_nonascii_uri");
  lockPref("ldap_2.autoComplete.directoryServer", "ldap_2.servers._nonascii");
  lockPref("ldap_2.autoComplete.useDirectory", true);
  lockPref("toolkit.telemetry.enabled", true);
  lockPref("toolkit.telemetry.prompted", 2);
  lockPref("mail.identity.id1.reply_to", "");
  lockPref("mail.identity.id1.sig_on_fwd", true);
  lockPref("mail.spam.manualMark", true);
  lockPref("mail.spam.version", 1);
  lockPref("mail.rights.version", 1);
  lockPref("mail.server.default.check_all_folders_for_new", true);
  pref("extensions.usebccinstead.lastCheckedState", true);
  pref("extensions.usebccinstead.nonBccCount", 1);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.TLS", true);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.TLS.forced", true);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.activeAuthorization", 1);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.activeHost", 0);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.activeLogin", 1);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.enabled", true);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.firstRunDone", true);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.port.type", 0);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.proxy.type", 1);
  pref("extensions.sieve.account.$ldap_mail_replaced@$mail_domain.sasl.forced", false);
  defaultPref("extensions.shrunked.default.maxHeight", 1024);
  defaultPref("extensions.shrunked.default.maxWidth", 1280);
  defaultPref("extensions.shrunked.default.quality", 85);
  defaultPref("quicktext.defaultImport", "$quicktext_default_import");
  defaultPref("quicktext.firstTime", false);
  defaultPref("messenger.save.dir", "$messenger_save_dir");
  $caldav_settings
  lockPref("mail.identity.id1.htmlSigFormat", true);
  lockPref("mail.identity.id1.htmlSigText", "$signature");
} catch(e) {
  displayError("lockedPref", e);
}
END;
?>
