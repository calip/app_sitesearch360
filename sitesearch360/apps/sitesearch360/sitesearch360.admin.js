/**
 * sitesearch360 - Javascript admin controller class
 *
 * Site Search 360 is an ultra-speedy search solution that gives you and your users the most relevant results instantly.
 *
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package sitesearch360
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/app_sitesearch360
 */
SCHLIX.CMS.sitesearch360AdminController = class extends SCHLIX.CMS.BaseController  {  
    /**
     * Constructor
     */
    constructor ()
    {
        super("sitesearch360");
    };

 
    runCommand (command, evt)
    {
        switch (command)
        {
            case 'config':
                this.redirectToCMSCommand("editconfig");
                return true;
                break;
            
            default:
                return super.runCommand(command, evt);
                break;
        }
    }
};


