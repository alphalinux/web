READ ME FIRST: 

The iprobe suite runs on all Alpha machines prior to the EV6.  Iprobe also
requires a kernel >2.1.132, including all 2.2.X kernels. (Redhat 6.0
should work) It has been tested successfully on all Alpha/Linux machines
that boot using the Digital SRM and aboot.  It is NOT verified to work on
machines running MILO.  Your milage may vary!




READ ME SECOND: 

The following installation guide will tell you how to install iprobe on
your Alpha/Linux machine. 
  

NOTE:
-----

I have tried this on systems running Digital PAL code, (those that
boot through the digital unix SRM), and the Freeware Alpha PAL code, 
(those that boot with MILO). 

Run a recent kernel
-------------------

1)      You must have a kernel version >2.1.132. (Including all 2.2.X kernels)

Install the Tools/Library
-------------------------

Now you have 3 choices.  

A) RPM 
	Simply get the RPM, 
	
	rpm -i iprobe_suite-4.1-1.alpha.rpm


OR

B) make install

   Go to the root directory of the source and type 
	"make install".   
	This will create the necessary files and install them. 


OR

C) Do it by hand.

You must create the following device with the following permissions:
        mknod /dev/ipr c 61 0
        chmod a+r /dev/ipr
        chmod u+w /dev/ipr

	copy the binaries to /usr/local/bin: 

	cp ./iprobe/obj/linux_iprobe /usr/local/bin/iprobe
	cp ./ipreduce/obj/linux_ipreduce /usr/local/bin/ipreduce
	cp ./rep/obj/linux_rep /usr/local/bin/rep 

      	Install the library:

	cp ./lib/obj/liblipr.so /usr/local/lib/liblipr.so 


Install the kernel driver.
-------------------------

2) Unzip the kernel module with
	gunzip iprobe_suite-4.1-driver.o.gz 

**********IMPORTANT***********

Each time you want to run iprobe, you
must do this first.

3)      You MUST insert the kernel module.
	(-f allows you to ignore versions number. ) 	

	/sbin/insmod -f iprobe_suite-4.1-driver.o
	
4) Read the documentation in ./doc/TUTORIAL 

5) Wow the world with the speed of your highly optimized code running on
alpha/linux. 
