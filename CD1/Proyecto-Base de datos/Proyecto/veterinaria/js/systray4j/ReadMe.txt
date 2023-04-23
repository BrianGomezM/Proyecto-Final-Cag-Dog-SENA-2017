 ----------------------------------------------------------
|                                                          |
|            SysTray for Java v2.4.1 (win32)               |
|                                                          |
 ----------------------------------------------------------

License: LGPL

--------------------- Requirements ------------------------

    Windows 2000 or Windows XP
    JRE >= 1.3 ( not yet tested on 1.2 )

------------------------ Files ----------------------------

  systray4j.dll:
    Must be in the current working directory or
    in a directory where windows looks for DLLs
    (like system32).
    
  systray4j.jar:
    Must be accessible for the Java class loader,
    so make sure it is in your class path.
    
  example.cmd:
    Run the example code.
    
  COPYING:
    GNU Lesser General Public License
    
---------------------- Directories ------------------------

   doc:
     Contains the documentation for the systray4j package.
     
   example:
     Contains example code on how to use the SysTray for
     Java API. Read and change it to become familiar with
     the interface.
     
   icons:
     Contains the icons used by the example application.
     
------------------------ Changes --------------------------    

v2.4.1:

  New:
  
    - The KDE release contains the old socket based
      implementation as an alternative.
  
  Fixed:
  
    - Native thread started when isAvailable() was called.
      Now it starts when the first menu is created.
    
-----------------------------------------------------------

v2.4:

  New:
  
    - Unicode support.
    
    - Systray now emulated on unsupported platforms.
    
    - The KDE3 code now is based on JNI too.

-----------------------------------------------------------
    
v2.3.2:

  New:
  
    - SysTrayMenuIcon constructor now accepts URL as source
      for the icon to load.
    
    - The static member SysTrayMenu.dispose() was intro-
      duced as an alternative to System.exit(). It will
      stop all systray4j threads so they won´t keep the
      application alive.

-----------------------------------------------------------

v2.3.1:

  New:
  
    - Support for extended ASCII characters on win32.
    
  Fixed:
    
    - setState() in CheckableMenuItem didn´t work when
      passing true as argument.

-----------------------------------------------------------    
    
v2.3

  New:
   
    - Checkable menu items.
    - Support for KDE3.

-----------------------------------------------------------    

v2.2.1
    
  Fixed:
    
    - Creating a submenu prior to the main menu made -
      at least sometimes - the virtual machine crash.
   
-----------------------------------------------------------
