<?php
// Strings used throughout ownCloud.org.

/* VERSIONS */
$VERSIONS_SERVER_MAJOR_STABLE = '9.1';
$VERSIONS_SERVER_FULL_STABLE = '9.1.5';
$VERSIONS_SERVER_MAJOR_DEVELOPMENT = '10.0';
$VERSIONS_SERVER_MAJOR_DEV_DOCS = '10.0'; // Used in dev docs links
$VERSIONS_CLIENT_DESKTOP_STABLE_FULL = '2.3.1';
$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT = '2.3'; // For use in documentation link

/* DOCUMENTATION */
$DOCUMENTATION_BASE = 'https://doc.owncloud.org';
$DOCUMENTATION_DEVELOPER = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_DEV_DOCS.'/developer_manual/';
$DOCUMENTATION_ADMIN = $DOCUMENTATION_BASE.'/server/latest/admin_manual/';
$DOCUMENTATION_USER = $DOCUMENTATION_BASE.'/server/latest/user_manual/';
$DOCUMENTATION_CLIENT_DESKTOP = $DOCUMENTATION_BASE.'/desktop/'.$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT;
$VERSIONS_VM = '9.1.5-1.1-201704201507';
$VM_UBUNTU_RELEASE = '14.04';

/* DOWNLOADS */
$OWNCLOUD_GPG = 'https://owncloud.org/owncloud.asc';

// Desktop client stable
$DOWNLOAD_CLIENT_DESKTOP_BASE = 'https://download.owncloud.com/desktop/stable/';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN = $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-2.3.1.6824-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC = $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-2.3.1.4139.pkg';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:desktop&amp;package=owncloud-client';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES = $DOWNLOAD_CLIENT_DESKTOP_BASE.'owncloudclient-2.3.1.tar.xz';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES.'.asc';

// Desktop client testing
// By having an empty VERSIONS_CLIENT_DESKTOP_TESTING the website should show the nightly links instead
$VERSIONS_CLIENT_DESKTOP_TESTING = '';
$DOWNLOAD_CLIENT_DESKTOP_TEST_BASE= 'https://download.owncloud.com/desktop/testing/';
$DOWNLOAD_CLIENT_DESKTOP_TEST_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud-2.3.1.6812rc1-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_TEST_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud-2.3.1.4127rc1.pkg';
$DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:testing&amp;package=owncloud-client';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'testpilotcloud-2.3.1.6813rc1-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'testpilotcloud-2.3.1.4128rc1.pkg';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:testpilot:testing&amp;package=testpilotcloud-client';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES= $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'owncloudclient-2.3.1rc1.tar.xz';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES.'.asc';

// Server
$DOWNLOAD_SERVER_BASE = 'https://download.owncloud.org/community/';

// stable
$DOWNLOAD_SERVER_STABLE_TAR = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2';
$DOWNLOAD_SERVER_STABLE_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.md5';
$DOWNLOAD_SERVER_STABLE_TAR_SHA256 = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.sha256';
$DOWNLOAD_SERVER_STABLE_TAR_PGP = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.asc';
$DOWNLOAD_SERVER_PACKAGES_STABLE = 'https://download.owncloud.org/download/repositories/stable/owncloud';
$DOWNLOAD_SERVER_STABLE_ZIP = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip';
$DOWNLOAD_SERVER_STABLE_ZIP_MD5 = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.md5';
$DOWNLOAD_SERVER_STABLE_ZIP_SHA256 = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.sha256';
$DOWNLOAD_SERVER_STABLE_ZIP_PGP = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.asc';

// Daily
$DOWNLOAD_SERVER_DAILY_TAR = $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2';
$DOWNLOAD_SERVER_DAILY_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2.md5';
$DOWNLOAD_SERVER_PACKAGES_DAILY = 'https://download.owncloud.org/download/repositories/nightly/owncloud';

// Testing
$DOWNLOAD_SERVER_PACKAGES_TESTING = 'https://download.owncloud.org/download/repositories/testing/owncloud';
$SERVER_TESTING_VERSION ='10.0.0 RC2';
$DOWNLOAD_SERVER_TAR_TESTING ='https://download.owncloud.org/community/testing/owncloud-10.0.0RC2.tar.bz2';
$DOWNLOAD_SERVER_ZIP_TESTING ='https://download.owncloud.org/community/testing/owncloud-10.0.0RC2.zip';

// web installer
$DOWNLOAD_SERVER_WEB_INSTALLER = 'https://download.owncloud.com/download/community/setup-owncloud.php';

// VM
$DOWNLOAD_VM_BASE = 'https://download.owncloud.org/community/production/vm/';

$DOWNLOAD_VM_OVA   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.ova.zip';
$DOWNLOAD_VM_QCOW2 = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.qcow2.zip';
$DOWNLOAD_VM_RAW   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.raw.zip';
$DOWNLOAD_VM_VHDX  = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.vhdx.zip';
$DOWNLOAD_VM_VMDK  = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.vmdk.zip';
$DOWNLOAD_VM_VMX   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.vmx.zip';

// Mobile clients
$DOWNLOAD_CLIENT_MOBILE_IOS = 'https://itunes.apple.com/us/app/owncloud/id543672169?ls=1&mt=8';
$DOWNLOAD_CLIENT_MOBILE_ANDROID = 'https://play.google.com/store/apps/details?id=com.owncloud.android';
$DOWNLOAD_CLIENT_MOBILE_BLACKBERRY = 'https://appworld.blackberry.com/webstore/content/59955931/';
$DOWNLOAD_CLIENT_MOBILE_AMAZON = 'https://www.amazon.com/ownCloud-Inc/dp/B00944PQMK';
?>
