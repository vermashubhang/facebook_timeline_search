import sqlite3 as lite
import sys
con = lite.connect('test9.db')
from HTMLParser import HTMLParser
inTD = False
inTR = False
inImg=False
flag=0
val=1
new=0
new1=0
val1=0
img=""
val2=""
count=0
# create a subclass and override the handler methods
class MyHTMLParser(HTMLParser):
    def handle_starttag(self, tag, attrs):
        global inTD
        global inImg
        global val
        global val1
        global new
        global new1
        global val2
        global img
        if val1==1:
            if tag=="a":
                if attrs[0][0]=="href":
                    new=0
                    if val==1:
                        #val1=attrs[0][1]
                        img=attrs[0][1]
                        print attrs[0][1]
                        inImg=True
                    
        if tag == "abbr" :
            if attrs[0][1]=="time published" :
                new=new+1
                inTD = True
        
            
    def handle_endtag(self, tag):
        global inTD
        global inImg
        global val
        global new
        global val1
        global img
        global val2
        
        if tag=="a":
            inImg=False
        if tag=="td":
            val=0
        if tag == "abbr":
            inTD = False
        if tag == "div" :
            val=1
        if tag=="h2":
            val1=1
        
        
    def handle_data(self, data):
        global inTD
        global val1
        global flag
        global new
        global new1
        global img
        global val2
        global count
        if inTD:
            if new==1:
                val2=data
                print val2
                vald,valt=val2.split(',')
                month,date=vald.split(' ')
                yer,time=valt.split('at')
                
                year=yer[1:5]
                with con:
                    count=count+1
                    if count!=1 :
                        cur.execute("INSERT INTO Album_Profile_Pictures VALUES('"+img+"','"+month+"','"+date+"','"+year+"','"+time+"')")
        if inImg :
            a=1
            #print data
        #elif flag==1 :
         #   flag0
          #  print data
         
            #with con:
                
                #cur.execute("INSERT INTO Album_Profile_Pictures VALUES('"+data+"')")



# instantiate the parser and fed it some HTML

cur = con.cursor()
cur.execute("DROP TABLE IF EXISTS Album_Profile_Pictures")
cur.execute("CREATE TABLE Album_Profile_Pictures(image_path TEXT,month TEXT,day TEXT,year TEXT,time TEXT)")
parser = MyHTMLParser()
f= open('C:\\Python27\\html\\album-Profile Pictures.html','r')
content=f.readlines()
str1 = ''.join(content)
parser.feed(str1)
f.close()



