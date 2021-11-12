@extends('layouts.app')

@section('content')  
    <h3>Mental Health Companion</h3>
    <div id='inlinebuttons'>
    <p>What do you want to know about in detail?</p>
    <!--<button onclick="viewer1()">Trauma</button>
    <button onclick="viewer2()">Abuse</button>
    <button onclick="viewer3()">Stress</button></div>-->
    <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default" onclick="viewer1()">Left</button>
        <button type="button" class="btn btn-default" onclick="viewer2()">Middle</button>
        <button type="button" class="btn btn-default" onclick="viewer3()">Right</button>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Trauma</div>
        <div class="panel-body" id="Trauma">
            <p>Trauma complicates one in 12 pregnancies, and is the leading nonobstetric cause of death among pregnant women. The most common traumatic injuries are motor vehicle crashes, assaults, falls, and intimate partner violence. Nine out of 10 traumatic injuries during pregnancy are classified as minor, yet 60% to 70% of fetal losses after trauma are a result of minor injuries. In minor trauma, four to 24 hours of tocodynamometric monitoring is recommended. Ultrasonography has low sensitivity, but high specificity, for placental abruption. The Kleihauer-Betke test should be performed after major trauma to determine the degree of fetomaternal hemorrhage, regardless of Rh status. To improve the effectiveness of cardiopulmonary resuscitation, clinicians should perform left lateral uterine displacement by tilting the whole maternal body 25 to 30 degrees. Unique aspects of advanced cardiac life support include early intubation, removal of all uterine and fetal monitors, and performance of perimortem cesarean delivery. Proper seat belt use reduces the risk of maternal and fetal injuries in motor vehicle crashes. The lap belt should be placed as low as possible under the protuberant portion of the abdomen and the shoulder belt positioned off to the side of the uterus, between the breasts and over the midportion of the clavicle. All women of childbearing age should be routinely screened for intimate partner violence.</p>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" >Abuse</div>
        <div class="panel-body" id="Abuse">
            <p>Abuse, whether emotional or physical, is never okay. Unfortunately, some women experience abuse from a partner. Abuse crosses all racial, ethnic and economic lines. Abuse often gets worse during pregnancy. The American College of Obstetricians and Gynecologists (also called ACOG) says that 1 in 6 abused women is first abused during pregnancy. More than 320,000 women are abused by their partners during pregnancy each year</p>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" >Stress</div>
        <div class="panel-body" id="Mental Stress">
            <p>Feeling stressed is common during pregnancy because pregnancy is a time of many changes. Your family life, your body and your emotions are changing. You may welcome these changes, but they can add new stresses to your life.</p>
        </div>
      </div>
                  
    
    <!--<div id = 'Trauma'><p>Trauma complicates one in 12 pregnancies, and is the leading nonobstetric cause of death among pregnant women. The most common traumatic injuries are motor vehicle crashes, assaults, falls, and intimate partner violence. Nine out of 10 traumatic injuries during pregnancy are classified as minor, yet 60% to 70% of fetal losses after trauma are a result of minor injuries. In minor trauma, four to 24 hours of tocodynamometric monitoring is recommended. Ultrasonography has low sensitivity, but high specificity, for placental abruption. The Kleihauer-Betke test should be performed after major trauma to determine the degree of fetomaternal hemorrhage, regardless of Rh status. To improve the effectiveness of cardiopulmonary resuscitation, clinicians should perform left lateral uterine displacement by tilting the whole maternal body 25 to 30 degrees. Unique aspects of advanced cardiac life support include early intubation, removal of all uterine and fetal monitors, and performance of perimortem cesarean delivery. Proper seat belt use reduces the risk of maternal and fetal injuries in motor vehicle crashes. The lap belt should be placed as low as possible under the protuberant portion of the abdomen and the shoulder belt positioned off to the side of the uterus, between the breasts and over the midportion of the clavicle. All women of childbearing age should be routinely screened for intimate partner violence.</p></div>
    <div id= 'Abuse'><p>Abuse, whether emotional or physical, is never okay. Unfortunately, some women experience abuse from a partner. Abuse crosses all racial, ethnic and economic lines. Abuse often gets worse during pregnancy. The American College of Obstetricians and Gynecologists (also called ACOG) says that 1 in 6 abused women is first abused during pregnancy. More than 320,000 women are abused by their partners during pregnancy each year</p></div>
    <div id= 'Mental Stress'><p>Feeling stressed is common during pregnancy because pregnancy is a time of many changes. Your family life, your body and your emotions are changing. You may welcome these changes, but they can add new stresses to your life.
    -->   

        
        </p></div>
</div>
<div id="NC">
    <h3>
        Nutritional Companion</h3>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Weight (in KG's:)</span>
            <input type="text" class="form-control" placeholder="Weight" aria-describedby="basic-addon1" id="weight">
          </div>
          
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Height (in M's:)</span>
            <input type="text" class="form-control" placeholder="Height" aria-describedby="basic-addon1" id="height">
              
        </div>
          
          </div>
        <!--Weight(in kg's):<input type="number" id='weight'/>
        Height(in kg's):<input type="number" id='height'/>-->
        <button class="btn btn-danger"onclick="BMICalc()">Submit</button>
        <div id="BMIOutput"></div>
        

    
</div>
<div id="MC">
    <h3>Medical Companion</h3>
    <div>
        {!! Form::open(['action' => 'App\Http\Controllers\Appointments@store','method'=>'POST']) !!}
        {{Form::label('name', 'Name')}}
</div><div>   
        {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Please Enter your name']) }}
        {{Form::label('age', 'Age')}}
        </div><div> 
        {{Form::text('age','',['class' => 'form-control', 'placeholder' => 'Please Enter your Age']) }}
        {{Form::label('mobile', 'Mobile')}}
        </div><div>
        {{Form::text('mobile','',['class' => 'form-control', 'placeholder' => 'Please Enter your Mobile']) }}
        {{Form::label('cond', 'Condition')}}
        </div><div>
        {{Form::text('cond','',['class' => 'form-control', 'placeholder' => 'Please Enter your Condition']) }}
        {{Form::label('email', 'Email')}}
        </div><div>
        {{Form::text('email','',['class' => 'form-control', 'placeholder' => 'Please Enter your Email']) }}
        
        {{Form::submit('Book Your Appointment');}}
        {!! Form::close() !!}
</div>
       </div>
</div>
    <div id="response"></div>
</div>
{!! Form::open(['action' => 'App\Http\Controllers\fileUploader@upload','method'=>'POST','enctype'=>'multipart/form-data']) !!}
{{Form::file('userfile')}}
{{Form::submit('Submit');}}
        
{!! Form::close() !!}
    <script>
        window.onload=viewer1();
function viewer1(){
    var elem_1=document.getElementById('Trauma');
    var elem_2=document.getElementById('Abuse');
    var elem_3=document.getElementById('Mental Stress');
    elem_1.style.display='block';
    elem_2.style.display='none';
    elem_3.style.display='none';
}
function viewer2(){
    var elem_1=document.getElementById('Trauma');
    var elem_2=document.getElementById('Abuse');
    var elem_3=document.getElementById('Mental Stress');
    elem_1.style.display='none';
    elem_2.style.display='block';
    elem_3.style.display='none';
}
function viewer3(){
    var elem_1=document.getElementById('Trauma');
    var elem_2=document.getElementById('Abuse');
    var elem_3=document.getElementById('Mental Stress');
    elem_1.style.display='none';
    elem_2.style.display='none';
    elem_3.style.display='block';
}
function BMICalc(){
    var output=document.getElementById('BMIOutput');
    output.innerHTML='Your BMI is:'; 
    var weight=document.getElementById('weight');
    var height=document.getElementById('height');
    //console.log(weight.value());
    var output=document.getElementById('BMIOutput');
    var weight_act=parseInt(weight.value);
    var height_act=parseFloat(height.value);
    var BMI=weight_act/(height_act*height_act);
    output.innerHTML+=BMI; 
    if(BMI>=34){alert('Please contact Obstretacian ASAP!!');}

}


    </script>
    
    @endsection