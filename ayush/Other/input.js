function WriteToFile(passForm) {
 
    set fso = CreateObject("Scripting.FileSystemObject"); 
    set s   = fso.CreateTextFile("C:\Users\animesh\Desktop\ayush\Other\filename.txt", True);
 
    var area = document.getElementById('text');
    s.writeline(area);
 
    s.writeline("-----------------------------");
    s.Close();
 }