# Page Path History Central Manager
#### Manage all page paths history redirects in a single locations.

Manager for the processwrie PagePathHistory module, that creates redirects automatically every time a page is moved / renamed. These redirects do not contain regex's and they will not redirect a user away from a published page making them safe for not technical editors to create.

**Features:**
* Create new redirects
* Remove old redirects
* See all the automatically created page path history redirects in your system.

**Viewing all existing redirects:**
![Alt text](assets/demo.png?raw=true)

**Adding Content:**
![Alt text](assets/demo-add.png?raw=true)

**Tested on:**
Processwire 2.6, 3.0


## Install

1. Install the module [PagePathHistory]() from within the Processwire admin. [PagePathHistory]() is included in core but not installed by default.
2. Install the module ProcessPathHistoryCentralManager by cloning this repo into site/modules/ in your processwire install.
3. Install the module in the admin interface.
4. You can now manage urls under setup > page path history redirect manager

Similar to and is compatible with [PagePathHistoryManager](https://github.com/bfncs/PagePathHistoryManager) which lets you mange page path history redirects on a specific page on the settings tab.

