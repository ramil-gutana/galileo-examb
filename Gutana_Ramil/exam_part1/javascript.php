<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h5>Fix the sentence. (Capitalize the first word only and add spaces per word). Note: Assume that the string is a variable.</h5>
        <p>TheQuickBrownFoxJumpsOverTheLazyDog.</p>
        <h5>Answer:</h5>
        <p id="sentence"></p>
    </div>
    <div id="contactForm">
        
    </div>
</body>
</html>
<script>
    var p=document.getElementById('sentence');
    var sentence='TheQuickBrownFoxJumpsOverTheLazyDog.'
    var expression=/[A-Z][a-z]*/g;
    let newSentenceArray=sentence.match(expression);
    sentence='';
    for(i=0;i<newSentenceArray.length;i++){
        if(i==0){
            sentence +=`${newSentenceArray[i]} `
        
        }
        else if(i===newSentenceArray.length){
            sentence+=newSentenceArray[i];
        }
        else{
            sentence+=`${newSentenceArray[i].toLowerCase()} `
        }

    }
    p.innerHTML=sentence+'.';
</script>
<script>
   var contactForm=document.getElementById('contactForm');
   var emp;
   fetch('http://localhost/galileo/exam_part1/employee.php')
  .then(res => res.json())
  .then(data => emp = data)
  .then(() =>emp.employees.sort(sortByLastName)).then(
      ()=>{ 
          var c=`
                <h1>Contact Form</h1>
                <div>  
                    <label> First Name</label>
                     <input type="text" value="${emp.employees[0].first_name}"/>
                </div>
                <div>  
                    <label> Last Name</label>
                     <input type="text" value="${emp.employees[0].last_name}"/>
                </div>
                <div>  
                    <label> Birthday</label>
                     <input type="date" value="${emp.employees[0].birthday}"/>
                </div>
                `;
                c+='<div>Gender</div>';
                if(emp.employees[0].gender.male==true){

                    c+=`<input type="radio" name="gender" value="Male" checked />Male`;
                }
                else{
                    c+=`<input type="radio"  name="gender" value="Male"/>Male`;
                }
                if(emp.employees[0].gender.female==true)
                {
                    c+=`<input type="radio"  name="gender" value="Female" checked/>Female`;
                }
                else{
                    c+=`<input type="radio"  name="gender" value="Female"/>Female`;
                }
                c+='<div>Known Language</div>';
                for(b=0; b<emp.employees[0].knownLanguage.length;b++){
                    c+=`<input type="checkbox"  name="language" value="${emp.employees[0].knownLanguage[b]}" checked/>${emp.employees[0].knownLanguage[b]}`;
                }
          contactForm.innerHTML=c;
    }
   );
  function sortByLastName(b,c){
      if(b.last_name==c.last_name){
          return 0;
      }
      if(b.last_name>c.last_name){
          return 1;
      }
      else{
          return -1;
      }

  }
    
</script>