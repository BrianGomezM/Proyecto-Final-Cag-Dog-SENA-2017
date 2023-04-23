
import javax.swing.*;
import java.awt.event.*;
import java.awt.*;
import java.util.Vector;

import snoozesoft.systray4j.*;

/**
 * Example for the systray4j package.
 */
public class Example extends JFrame implements ActionListener, SysTrayMenuListener
{
    // frame dimension
    static final int INIT_WIDTH    = 220;
    static final int INIT_HEIGHT   = 140;

    private static final String[] toolTips =
    {
        "SysTray for Java rules!",
        "brought to you by\nSnoozeSoft 2004"
    };

    // create icons
    static final SysTrayMenuIcon[] icons =
    {
        // the extension can be omitted
        new SysTrayMenuIcon( "icons/duke" ),
        new SysTrayMenuIcon( "icons/duke_up" )
    };

    SysTrayMenu menu;
    int currentIndexIcon;
    int currentIndexTooltip;

    public Example()
    {
        super( "SysTray for Java Example" );
        setIconImage( new ImageIcon(
            getClass().getResource( "rocket.gif" ) ).getImage() );

        Dimension dimScreen = Toolkit.getDefaultToolkit().getScreenSize();

        int xPos = ( dimScreen.width - INIT_WIDTH ) / 2;
        int yPos = ( dimScreen.height - INIT_HEIGHT ) / 2;

        setBounds( xPos, yPos, INIT_WIDTH, INIT_HEIGHT );

        // don´t forget to assign listeners to the icons
        icons[ 0 ].addSysTrayMenuListener( this );
        icons[ 1 ].addSysTrayMenuListener( this );

        // change this according to the number of buttons used
        getContentPane().setLayout( new GridLayout( 4, 1 ) );

        addButton( "change icon" );
        addButton( "change tooltip" );
        addButton( "show/hide icon" );
        addButton( "enable/disable submenu" );

        // create the menu
        createMenu();

        show();
    }

    public static void main( String[] args )
    {
        try{ UIManager.setLookAndFeel( UIManager.getSystemLookAndFeelClassName() ); }
        catch( Exception e ) {}

        new Example();
    }

    public void actionPerformed( ActionEvent e )
    {
        if( e.getActionCommand().equals( "change tooltip" ) )
        {
            if( currentIndexTooltip == 0 ) currentIndexTooltip = 1;
            else currentIndexTooltip = 0;

            menu.setToolTip( toolTips[ currentIndexTooltip ] );
        }
        else if( e.getActionCommand().equals( "change icon" ) )
        {
            if( currentIndexIcon == 0 ) currentIndexIcon = 1;
            else currentIndexIcon = 0;

            menu.setIcon( icons[ currentIndexIcon ] );
        }
        else if( e.getActionCommand().equals( "show/hide icon" ) )
        {
            if( menu.isIconVisible() ) menu.hideIcon();
            else menu.showIcon();
        }
        else if( e.getActionCommand().equals( "enable/disable submenu" ) )
        {
            SysTrayMenuItem item = menu.getItem( "Communication" );
            if( item.isEnabled() ) item.setEnabled( false );
            else item.setEnabled( true );
        }
    }

    public void menuItemSelected( SysTrayMenuEvent e )
    {
        if( e.getActionCommand().equals( "exit" ) ) System.exit( 0 );
        else if( e.getActionCommand().equals( "about" ) )
        {
            JOptionPane.showMessageDialog( this, "SysTray for Java v" + SysTrayMenu.VERSION );
        }
        else JOptionPane.showMessageDialog( this, e.getActionCommand() );
    }

    public void iconLeftClicked( SysTrayMenuEvent e )
    {
        if( isVisible() ) hide();
        else show();
    }

    public void iconLeftDoubleClicked( SysTrayMenuEvent e )
    {
        JOptionPane.showMessageDialog( this, "You may prefer double-clicking the icon." );
    }

    void createMenu()
    {
        // create some labeled menu items
        SysTrayMenuItem subItem1 = new SysTrayMenuItem( "Windows 98", "windows 98" );
        subItem1.addSysTrayMenuListener( this );
        // disable this item
        subItem1.setEnabled( false );

        SysTrayMenuItem subItem2 = new SysTrayMenuItem( "Windows 2000", "windows 2000" );
        subItem2.addSysTrayMenuListener( this );
        SysTrayMenuItem subItem3 = new SysTrayMenuItem( "Windows XP", "windows xp" );
        subItem3.addSysTrayMenuListener( this );
        
        SysTrayMenuItem subItem4 = new SysTrayMenuItem( "GNOME", "gnome" );
        subItem4.addSysTrayMenuListener( this );
        subItem4.setEnabled( false );
        
        SysTrayMenuItem subItem5 = new SysTrayMenuItem( "KDE 3", "kde 3" );
        subItem5.addSysTrayMenuListener( this );

        Vector items = new Vector();
        items.add( subItem1 );
        items.add( subItem2 );
        items.add( subItem3 );
        items.add( subItem4 );
        items.add( subItem5 );

        // create a submenu and insert the previously created items
        SubMenu subMenu = new SubMenu( "Supported", items );

        // create some checkable menu items
        CheckableMenuItem chItem1 = new CheckableMenuItem( "IPC", "ipc" );
        chItem1.addSysTrayMenuListener( this );
        
        CheckableMenuItem chItem2 = new CheckableMenuItem( "Sockets", "sockets" );
        chItem2.addSysTrayMenuListener( this );

        CheckableMenuItem chItem3 = new CheckableMenuItem( "JNI", "jni" );
        chItem3.addSysTrayMenuListener( this );
        
        // check this item
        chItem2.setState( true );
        chItem3.setState( true );

        // create another submenu and insert the items through addItem()
        SubMenu chSubMenu = new SubMenu( "Communication" );
        // disable this submenu
        chSubMenu.setEnabled( false );

        chSubMenu.addItem( chItem1 );
        chSubMenu.addItem( chItem2 );
        chSubMenu.addItem( chItem3 );

        // create an exit item
        SysTrayMenuItem itemExit = new SysTrayMenuItem( "Exit", "exit" );
        itemExit.addSysTrayMenuListener( this );

        // create an about item
        SysTrayMenuItem itemAbout = new SysTrayMenuItem( "About...", "about" );
        itemAbout.addSysTrayMenuListener( this );

        // create the main menu
        menu = new SysTrayMenu( icons[ 0 ], toolTips[ 0 ] );

        // insert items
        menu.addItem( itemExit );
        menu.addSeparator();
        menu.addItem( itemAbout );
        menu.addSeparator();
        menu.addItem( subMenu );
        menu.addItem( chSubMenu );
    }

    void addButton( String label )
    {
        JButton btn = new JButton( label );
        btn.setActionCommand( label );
        btn.addActionListener( this );

        getContentPane().add( btn );
    }
}
