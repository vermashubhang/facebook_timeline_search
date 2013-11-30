import sqlite3 as lite
from HTMLParser import HTMLParser
import sys
con = lite.connect('test9.db')

flag=0
flag1=0
var1=0
var2=0
var=0

class Logger(object):
    def __init__(self, filename="Default.log"):
        self.terminal = sys.stdout
        self.log = open(filename, "a")

    def write(self, message):
        self.terminal.write(message)

        
        self.log.write(message)



# create a subclass and override the handler methods
class notifications(HTMLParser):
        
    def handle_starttag(self, tag, attrs):
        a=1
        
    def handle_endtag(self, tag):
        a=1 
       
        
    def handle_data(self, data):
        global flag
        global flag1
        global var1
        global var2
        global var3
        if data=="sms" :
            flag=1
            print data

        elif flag==1:
            flag=2
            var1=data
            print data
            
        elif flag==2:
            flag=3
            var2=data
            print data
              
            
        elif flag==3:
            flag=1
            var3=data
            print data
            with con:
                cur.execute("INSERT INTO  notification_setting VALUES('"+var1+"' ,'"+var2+"','"+var3+"') ")
        
    

# instantiate the parser and fed it some HTML
cur = con.cursor()
cur.execute("DROP TABLE IF EXISTS notification_setting")

cur.execute("CREATE TABLE notification_setting( name TEXT,email TEXT,sms TEXT)")
parser = notifications()
f= open('C:\\Python27\\html\\notifications.html','r')
content=f.readlines()
str1 = ''.join(content)

parser.feed(str1)
   
    
f.close()

