# WordPress Beta Tester

Tags: beta, advanced, testing
Contributors: westi, mlteal, afragen, pbiron, costdev
License: GPLv2
License URI: https://www.opensource.org/licenses/GPL-2.0
Requires at least: 3.1
Requires PHP: 5.6
Tested up to: 6.2
Stable Tag: 3.3.5

Allows you to easily upgrade for testing the next versions of WordPress.

## Description
This plugin provides an easy way to get involved with beta testing WordPress.

Once installed it will enable you to upgrade your website to the latest Nightly, Beta, or Release Candidate at the click of a button using the built in upgrader.

By default once enabled it switches your website onto the point release update channel.

For the more adventurous there is the option to switch to the bleeding edge (trunk) of development.

Don't forget to backup before you start!

Please enable auto-updates for this plugin to ensure future changes are properly handled with core updates.

### Extra Settings

There is a setting to **Skip successful autoupdate emails**.  It functions to disable sending emails to the admin user for successful autoupdates. Only emails indicating failures of the autoupdate process are sent.

The **Extra Settings** tab may contain choices for testing new features in trunk that require constants to be set. A checked feature will add a constant to the user's `wp-config.php` file in the format as follows:

`define( 'WP_BETA_TESTER_{$feature}', true );`

Unchecking the feature will remove the constant.

This plugin resets the constants in `wp-config.php` on plugin activation and removes them on plugin deactivation. Use the filter `wp_beta_tester_config_path` to return a non-standard `wp-config.php` file path.

If no settings are present there is no testing to be done that requires this feature.

### Report a Bug

This feature will hopefully promote the testing and reporting of issues to the appropriate location.

There is a **Report a Bug** admin menu item to directly take the user to the **Report a Bug** tab in WordPress Beta Tester.

PRs are welcome on [GitHub](https://github.com/afragen/wordpress-beta-tester).

## Changelog

#### 3.3.5 / 2023-02-22
* updated dashboard widget with some better dynamic information
* `Report a Bug`: introduce search button
* updated strings
* `Report a Bug`: Truncate the value of mysqli::$client_info

#### 3.3.4 / 2023-03-20
* PHP 5.6 and `EOD`, why we can't have nice looking code in the editor

#### 3.3.3 / 2023-03-20
* add an icon 🐞
* improved environment data and display
* improve clipboard text for insertion
* lots of other stuff for Colin to do

#### 3.3.2 / 2023-03-17 🇮🇪☘️
* more fixes for 'Report a Bug'
* updated/added strings
* some developery stuff

#### 3.3.1 / 2023-03-17 ☘️
* update readme
* sort listed plugins in 'Report a Bug'
* add mu-plugins in 'Report a Bug'
* fix for multisite
* initiate plugin in `plugins_loaded`

#### 3.3.0 / 2023-03-16
* added `Report a Bug` feature, thanks @costdev, @ironprogrammer

#### 3.2.9 / 2023-02-27
* mitigate some issues/possible issues with PHP 8.1/8.2

#### 3.2.8 / 2023-02-07
* Composer 2.5.2 is fixed.

#### 3.2.7 / 2023-02-07
* revert to Composer v2.2.x locally for autoloader compatibility

#### 3.2.6 / 2023-01-30
* revert to Composer v2.5.0 as v2.5.1 has bug causing fatal, fixed in next version of Composer

#### 3.2.5 / 2023-01-29
* added auto display relative fields immediately bleeding edge option is selected, thanks @Preciousomonze
* fixes for PHP8.1

#### 3.2.4 / 2022-11-07
* return empty array for 8.1 compatibility

#### 3.2.3 / 2022-09-29
* update for PHP 8.1 compatibility

#### 3.2.2 / 2022-06-23
* correctly use `sanitize_url()` and `esc_url()`
* fix `WP_Config_Transformer` to get anchor if wp-config.php has been modified

#### 3.2.1 / 2022-04-13
* update composer to work with PHP 5.6

#### 3.2.0 / 2022-04-12
* use `sanitize_key()` for nonces
* fix for transition from WP x.9 to WP x.0 to display correct next versions

#### 3.1.5 / 2022-01-28
* use `sanitize_title_with_dashes()` as `sanitize_file_name()` maybe have attached filter that changes output
* fix variable docblocks
* update nonce checks

#### 3.1.4 / 2021-09-24 **Hotfix**
* don't load `pluggable.php` for `wp_create_nonce()`, load in `plugins_loaded` hook

#### 3.1.3 / 2021-09-23
* nonce, escape, and sanitize all the things

#### 3.1.2 / 2021-09-04
* only use `esc_attr_e` for translating strings

#### 3.1.1 / 2021-07-11
* add @10up GitHub Actions WordPress SVN integration
* update Codex links for HelpHub links @audrasjb

#### 3.1.0 / 2021-02-08
* update for working correctly if new `WP_AUTO_UPDATE_CORE` constant is used.
* update `WP_Beta_Tester::channel_switching_modification()` to update past current release if appropriate
* tweak next versions when coming from point release to bleeding edge

#### 3.0.10 / 2021-01-11
* re-write `WP_Beta_Tester::get_current_wp_release()` to check https://api.wordpress.org/core/stable-check/1.0/
* fix `WPBT_Core::get_next_versions()` if user on current release
* tweak `WP_Beta_Tester::channel_switching_modification()` to work correctly with $wp_version <= $current_release and if on current release

#### 3.0.9 / 2020-12-01
* add conditional for filter to fix `core_update_footer()`, fixed in [r49708](https://core.trac.wordpress.org/changeset/49708)
* simplify some `preg_match()` calls
* fix PHP warning

#### 3.0.8 / 2020-11-28
* fix some PHP errors when using older versions of WP, for testing updates directly from these older versions like when using Core Rollback plugin

#### 3.0.7 / 2020-11-24
* tweak to `channel_switching_modification()`

#### 3.0.6 / 2020-11-21
* improved flow between _Bleeding edge_ and _Point release_

#### 3.0.5 / 2020-11-18
* don't show beta as a next version when on RC

#### 3.0.4 / 2020-11-17
* fix to correctly downgrade from _Bleeding edge_ to _Point release nightlies_.
* hide stream options other than _Nightlies_ for _Point release_ channel until [new Updates API changes](https://meta.trac.wordpress.org/ticket/5511)
* add settings for future Updates API above
* added `channel_settings_migrator()` for switching between `Bleeding edge` and `Point release` channels

#### 3.0.1 - 3.0.3 / 2020-10-27
* fixed regex to get next versions
* really didn't need to use `ReflectionClass` 🤦‍♂️, thanks @pbiron
* use `ReflectionClass` to get static variable `$core_update_constant` from `class WP_Beta_Tester` into `class WPBT_Core`

#### 3.0.0 / 2020-10-23
* major refactor for new core update API, thanks @dd32!
* now requires PHP >5.6
* allows for overrides when using the `WP_AUTO_UPDATE_CORE` constant
* update on-screen help

#### 2.2.13 / 2020-09-05
* enclose `WPConfigTransformer` in try/catch

#### 2.2.12 / 2020-08-10
* fix intermittent PHP warning [#21](https://github.com/afragen/wordpress-beta-tester/issues/21)
* deactivate and die if user attempting to run with `wordpress-develop`

#### 2.2.11 / 2020-08-01
* minor cleanup

#### 2.2.10 / 2020-05-01
* sanitize, escape & ignore
* move multiline boolean operator to front of line, new guidelines in WPCS
* fix `correct_versions_for_downgrade()` for being on current release version

#### 2.2.9 / 2020-03-24
* delete development RSS feed transient after core upgrade

#### 2.2.8 / 2020-03-17 🍀
* add Dev Notes and Field Guide links to dashboard
* add text/link for bug reporting to trac
* add help tabs to screen
* arbitrarily changed settings page id from `wp_beta_tester` to `wp-beta-tester` 😏

#### 2.2.7 / 2020-03-02
* update trac link in callout for _closed_ or _reopened_ tickets on the milestone
* only show Beta Tester Settings page link in callout with appropriate privileges, using `manage_network_options` and `manage_options`
* menu to Settings page also checks privileges as above

#### 2.2.6 / 2020-02-25
* removed extra `</li>` in dashboard callout, 4th time's the charm 😭

#### 2.2.5 / 2020-02-25
* less greedy regex for matching release posts in RSS for dashboard callout

#### 2.2.4 / 2020-02-25 🤦‍♂️
* added dashboard widget for network dashboard

#### 2.2.3 / 2020-02-25
* add dashboard widget callout for testing

#### 2.2.2 / 2020-02-22
* fix for strange Core API response where preferred version response contained the word 'version'. We now grab the last word of that response

#### 2.2.1 / 2020-02-20
* fix some i18n strings, thanks @pedro-mendonca

#### 2.2.0 / 2020-02-19
* added support for updating to the _beta/RC offer_. Based on and with tons of help from @pbrion, thanks Paul 👏🏻
* fixed so a downgrade from 'unstable' to 'point' serves the correct download
* test and exit from **Extra Settings** if `wp-config.php` is not writeable

#### 2.1.0 / 2019-09-17
* add extra setting to skip successful autoupdate emails
* add description to checkbox settings
* composer update

#### 2.0.4
* add update version information to settings page text

#### 2.0.3
* a11y fixes for settings tabs
* update `wp-cli/wp-config-transformer`

#### 2.0.2
* a11y fixes for checkbox, thanks @audrasjb

#### 2.0.1
* fix for incorrect last updated message

#### 2.0.0
* near complete re-write to use more OOPy practices
* put distinct process into separate classes
* allows for multiple settings tabs for addtional settings

#### 1.2.6
* remove extraneous code
* add GitHub Plugin URI header

#### 1.2.5
* fixed error message for downgrading version, thanks @andreas-andersson

#### 1.2.4
* don't use $GLOBALS

#### 1.2.3
* updated a few strings and correct typos
* run through WPCS linter
* fixed translation strings to include HTML in context and properly escape with `wp_kses_post()`
* fixed link to settings page under Multisite

#### 1.2.2
* change wording from blog to website

#### 1.2.0
* Escape output
* Indicate that _Bleeding edge nightlies_ are _trunk_
* new screenshot
* code improvements from linter

#### 1.1.2
* Remove anonymous function for PHP 5.2 compatibility.

#### 1.1.1
* fixed PHP notice for PHP 7.1
* made URL scheme agnostic

#### 1.1.0
* Fixed to work properly under Multisite.

#### 1.0.2
* Update tested up to version to 4.7.
* Fix the location of the settings screen in Multisite (moved under Settings in Network Admin).
* Minor text fixes.

#### 1.0.1
* Update tested up to version to 4.5.
* Fix PHP7 deprecated constructor notice.
* Change text domain to match the plugin slug.
* Update WordPress.org links to use HTTPS.
* Remove outdated bundled translations in favor of language packs.

#### 1.0
* Update tested up to version to 4.2.
* Update screenshot.
* Fix a couple typos.

#### See old-changelog.txt for previous changelog items

## Installation

1. Upload to your plugins folder, usually `wp-content/plugins/`
2. Activate the plugin on the plugin screen.
3. Navigate to Tools ... Beta Testing to configure the plugin.
4. Under Mulitsite, navigate to Settings ... Beta Testing to configure the plugin.
5. Visit Dashboard ... Upgrade (Or Tools ... Upgrade in versions before 3.0) and update to the latest Beta Release.

## Screenshots

1. This shows the main administration page for the plugin
2. This shows the Extra Settings page for the plugin
3. This shows the Dashboard callout
4. This shows the 'Report a Bug' tab
