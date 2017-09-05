<?php $pageTitle = "CLAMP Current Users" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Clamp Current Users." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>
	<div class="container" align="center">
        <div class="page-header">
            <h1 class="text-center">CLAMP Demo</h1>
        
        </div>
        <center>
        <script>
        function submitForm(){
        	document.demoForm.submit();

            
        }
        </script>
        <form action="http://localhost:9999/clampdemo" method="POST" target="demoFrame" name="demoForm">
        <textarea cols="50" rows="20" name="demotext">Sample Type / Medical Specialty:  Discharge Summary
Sample Name: Psychiatric Discharge Summary - 1
Description:  Discharge summary of a patient with mood swings and oppositional and defiant behavior.
(Medical Transcription Sample Report)
DISCHARGE SUMMARY
SUMMARY OF TREATMENT PLANNING:
Two major problems were identified at the admission of this adolescent:
1.   Mood swings.
2.   Oppositional and defiant behavior.
A developmentally appropriate group oriented therapy program was the primary treatment modality for this adolescent.  He participated in at least eight psychoeducational and activity groups.  The attending psychiatrist provided evaluation for and management of psychotropic medications and collaborated with the treatment team.  The clinical therapist facilitated individual, group, and family therapy at least twice per week.
COURSE IN HOSPITAL:  During his hospitalization, the patient was seen initially as very depressed, withdrawn, some impulsive behavior observed, also oppositional behavior was displayed on the unit.  The patient also talked with a therapist about his family conflicts.  He was initiated on an antidepressant medication, Zoloft, and he continued with Adderall.  He responded well to Zoloft, was less depressed.  He continued with behavior problems and mood swings.  A mood stabilizer was added to his treatment and with a positive response to it.
DIAGNOSTIC AND THERAPEUTIC TEST/EVALUATIONS:  Sleep-deprived EEG was done, which was reported as normal.  His last Depakote level was 57 as per 06/04/04.
His laboratory basic metabolic panel, CBC, TSH were reported within normal limits.
CONSULTATIONS:  He was seen by our medical consultant for a complete history and medical examination.  No major acute problems were reported, only the acne.  Treatment was initiated with face wash medication.
FINAL DIAGNOSIS:
AXIS    I:        ADHD (Attention Deficit Hyperactivity Disorder), rule out Bipolar Disorder and ODD (Oppositional Defiant Disorder).
AXIS   II:  Deferred.
AXIS  III:        Acne.
AXIS  IV:        Psychosocial stressors: Severe, family conflicts and educational problems.
AXIS   V:         GAF: 45 to 50.
CONDITIONS ON DISCHARGE:  The patient had appropriate mood and was not engaging in self-injurious behavior.  He denied suicidal or homicidal ideation.
Height: 5 foot 8 inches.  Weight: 134.  Blood pressure: 120/54.  Pulse: 104.  Respirations: 18.  Temperature: 99.
PROGNOSIS:   Guarded.
DISCHARGE PLAN:    As recommended by the treatment team, the patient was discharged to an RTC (Residential Treatment Center) Program to North Star RTC.  He was transferred by personal staff of that institution.
DISCHARGE INSTRUCTIONS/MEDICATIONS:  The patient is to continue treatment at North Star RTC.  Discharge medications are Adderall XR 30 mg p.o. a.m., Depakote 250 mg p.o. t.i.d., Zoloft 55 mg p.o. q. a.m.  The prescription was given to the patient's representative.  As other instructions, the patient may continue treatment at North Star RTC with at least once a week family session.  The patient's representative and the patient both acknowledged that they understand all the medications prescribed and how to administer them, and the importance of the next level of care and continuing treatment.  If he experiences any side effects or has any concerns regarding his behavior, safety, immediately contact North Star Hospital.
Keywords:
discharge summary, adhd, adderall, attention deficit hyperactivity disorder, mood swings, odd, oppositional and defiant behavior, zoloft, adolescent, homicidal ideation, impulsive behavior, oppositional behavior, psychoeducational, psychotropic medications, oppositional and defiant, depressed, psychiatric, axis,
</textarea><p>

        <input class="btn btn-info"  type="button" onclick="submitForm();" value="SUBMIT" name="submitButton">
        
        </p>
    </form>
        <p>
        <br>
        <iframe src="cd.html" width="1100" height="600" frameborder="0" name="demoFrame"></iframe>
    	</p>
    	</center>
        </div>
        <p>&nbsp;</p>
        
    <!-- /container -->
<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>