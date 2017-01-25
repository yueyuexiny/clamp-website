<!-- =========================
     Download
   ============================== -->
<div class="download">
    <div class="container">
        <!-- SECTION HEADER -->
        <div class="section-header">
            <!-- SECTION TITLE -->
            <h2 class="white-text">Download Page for <?php
                switch($_GET['v']){
                    case 'cmd':
                        echo 'CLAMP-CMD';
                        break;
                    case 'win':
                        echo 'CLAMP-GUI (Microsoft Windows)';
                        break;
                    case 'mac':
                        echo 'CLAMP-GUI (Mac OS X)';
                        break;
                }
                ?> Version</h2>
        </div>
        <!-- END OF SECTION TITLE -->

        <!-- CONTACT FORM-->
        <div>
            <form id="submit" action="download.php" method="post" role="form" data-toggle="validator" name="submit">
                <h3 style="margin-top: 50px">License Agreement</h3>
                <input type="hidden" name="email" value="<?php echo $_GET['email']?>">
                <input type="hidden" name="v" value="<?php echo $_GET['v']?>">
    	<textarea class="form-control" rows="10" style="font-size: 11px;margin-top: 30px;margin-bottom: 50px" id="licence" readonly>SOFTWARE RESEARCH LICENSE
Faculty at The University of Texas Health Science Center at Houston (University) have developed certain Software and Documentation that University wishes  to make available for non-commercial academic, research, experimental or personal use only. This license is designed to provide permission to use the software for these limited purposes. Distribution or any use other than as described above, including any commercial use, requires a separate license from University.
The terms of this Software Research License (SRL) apply to the Software, Documentation, Derivative Works, and source code. The accompanying source code is made available only under the terms of this SRL. BY CLICKING THE ACCEPT BUTTON, OR BY INSTALLING OR USING THE SOURCE CODE, YOU ARE CONSENTING TO BE BOUND BY THIS SRL. IF YOU DO NOT AGREE TO THE TERMS AND CONDITIONS OF THIS LICENSE, DO NOT CLICK THE ACCEPT BUTTON, AND DO NOT INSTALL OR USE ANY PART OF THE SOURCE CODE, SOFTWARE, OR DOCUMENTATION.
1.  DEFINITIONS.
1.1 Commercial Use means use of Software, Documentation, or Derivative Works for direct or indirect financial, commercial or strategic gain or advantage, including without limitation: (a) bundling or integrating the Software with any hardware product or another software product for transfer, sale or license to a third party (even if distributing the Software on separate media and not charging for the Software); (b) providing third parties with a link to the Software, Documentation, or Derivative Works or a copy of the Software, Documentation, or Derivative Works for use with hardware or another software product purchased by that third party; or (c) use in connection with the performance of services for which Licensee is compensated. Notwithstanding the foregoing, use of Software or Documentation by Licensee for the Purpose (as defined above) is not considered Commercial Use.
1.2 Derivative Works shall mean any material in any format or programming language that is a modification of, improvement or enhancement to, based upon, derived from, comprises, or is a further development of Software and/or Documentation.
1.3 Documentation shall mean all manuals, user documentation, and other related materials pertaining to the Software that are made available to Licensee in connection with the Software.
1.4 Licensor shall mean The University of Texas Health Science Center at Houston on behalf of the Board of Regents of The University of Texas System.
1.5 Licensee shall mean the person or entity that has agreed to the terms hereof by clicking the Accept button, installing or using the source code, or otherwise exercising rights granted hereunder.
1.6  Software shall mean the computer program(s) referred to as Clinical Language Annotation, Modeling, and Processing Toolkit (CLAMP) made available under this SRL in source code form, including any error corrections, bug fixes, patches, updates or other modifications that Licensor may in its sole discretion make available to Licensee from time to time, and any object code compiled from such source code.
1.7 Third Party Software means any third party code software or open source code software or any components incorporated in, used in the creation of, or used in conjunction with Software which may include restrictions or requirements on its use under a third party license. Such third party licenses may include any software licenses approved as open source licenses by the Open Source Initiative or any substantially similar licenses, including without limitation any license that, as a condition of distribution of the software licensed under such license, requires that the distributor make the software available in source code format.
2.  GRANT OF RIGHTS.
Subject to the terms and conditions hereunder, Licensor hereby grants to Licensee a worldwide, non-transferable, non-exclusive license to (a) install, use and reproduce the Software for non-commercial academic, research, experimental and personal use only; (b) use and modify the Software to create Derivative Works, subject to Section 3.2; and (c) use the Documentation, if any, solely in connection with Licensees authorized use of the Software. This grant specifically excludes the use of the Software, Derivative Works or Documentation, or any portion thereof, for any Commercial Use.
3. RESTRICTIONS; COVENANTS.
3.1 Licensee may not: (a) distribute, sub-license or otherwise transfer copies or rights to the Software (or any portion thereof) or the Documentation or Derivative Works to any third party without Licensors prior written consent; (b) use the Software (or any portion thereof) or Documentation for any other use except as described in Section 2; (c) copy the Software or Documentation other than for archival and backup purposes; or (d) remove any product identification, copyright, proprietary notices or labels from the Software and Documentation. This SRL confers no rights upon Licensee except those expressly granted herein.
3.2 Licensee hereby agrees that it will promptly provide a copy of all Derivative Works, upon request, to Licensor.  Licensee hereby grants Licensor a worldwide, non-exclusive, royalty-free perpetual license to reproduce, prepare Derivative Works of, publicly display, publicly perform, sublicense and distribute Derivative Works. Licensee also hereby grants Licensor a worldwide, non-exclusive, royalty-free patent license to make, have made, use, offer to sell, sell, import and otherwise transfer the Derivative Works under those patent claims licensable by Licensee that are necessarily infringed by the Derivative Works.
3.3 Third Party Software. Licensee acknowledges that certain components of the Software may originally have been created to operate concurrently with Third Party Software.  To the extent the terms of the Third Party Software licenses prohibit any of the restrictions in this Agreement, such restrictions in this Agreement will not apply to use of such Third Party Software. To the extent the terms of the licenses applicable to Third Party Software require Licensor to make an offer to provide source code or related information in connection with the Licensed Software, such offer is hereby made.  Licensee acknowledges receipt of notices for the Third Party Software for the initial delivery of the Licensed Software. As of the Effective Date, to Licensors knowledge, Licensed Software includes Third Party Software, and such Third Party Software is subject to the licenses in Attachments A and B.
4. PROTECTION OF SOFTWARE.
4.1 Confidentiality. The Software and Documentation are the confidential and proprietary information of Licensor. Licensee agrees to take adequate steps to protect the Software and Documentation from unauthorized disclosure or use. Licensee agrees that it will not disclose the Software or Documentation to any third party.
4.2 Proprietary Notices. Licensee shall maintain and place on any copy of Software or Documentation that it reproduces for internal use all notices as are authorized and/or required hereunder. Licensee shall include a copy of this SRL and the following notice, on each copy of the Software and Documentation. Such license and notice shall be embedded in each copy of the Software, in the video screen display, on the physical medium embodying the Software copy and on any Documentation:
Copyright ©2011- 2015, The University of Texas Health Science Center at Houston. All rights reserved. UNIVERSITY EXPRESSLY DISCLAIMS ANY AND ALL WARRANTIES CONCERNING THIS SOFTWARE AND DOCUMENTATION, INCLUDING ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR ANY PARTICULAR PURPOSE, NON-INFRINGEMENT AND WARRANTIES OF PERFORMANCE, AND ANY WARRANTY THAT MIGHT OTHERWISE ARISE FROM COURSE OF DEALING OR USAGE OF TRADE. NO WARRANTY IS EITHER EXPRESS OR IMPLIED WITH RESPECT TO THE USE OF THE SOFTWARE OR DOCUMENTATION. Under no circumstances shall University be liable for incidental, special, indirect, direct or consequential damages or loss of profits, interruption of business, or related expenses which may arise from use of Software or Documentation, including but not limited to those resulting from defects in Software and/or Documentation, or loss or inaccuracy of data of any kind.
5. DISCLAIMER OF WARRANTIES AND LIMITATION OF LIABILITIES.
5.1 Disclaimer of Warranties. TO THE EXTENT PERMITTED BY APPLICABLE LAW, THE SOFTWARE AND DOCUMENTATION ARE BEING PROVIDED ON AN AS IS BASIS WITHOUT ANY WARRANTIES OF ANY KIND RESPECTING THE SOFTWARE OR DOCUMENTATION, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO ANY WARRANTY OF DESIGN, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT. THE ENTIRE RISK ARISING OUT OF THE USE OR PERFORMANCE OF EXECUTABLE CODE OR SOFTWARE AND DOCUMENTATION REMAINS WITH LICENSEE. IN NO EVENT SHALL LICENSOR BE LIABLE FOR ANY DAMAGE WHATSOEVER ARISING OUT OF THE USE OF OR INABILITY TO USE EXECUTABLE CODE OR SOFTWARE AND DOCUMENTATION, EVEN IF LICENSOR HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. THE FOREGOING EXCLUSIONS AND LIMITATIONS WILL APPLY TO ALL CLAIMS AND ACTIONS OF ANY KIND, WHETHER BASED ON CONTRACT, TORT (INCLUDING WITHOUT LIMITATION, NEGLIGENCE), OR ANY OTHER GROUNDS. LICENSOR MAKES NO REPRESENTATIONS OR WARRANTIES THAT SOFTWARE AND DOCUMENTATION DOES NOT INFRINGE ON ANY THIRD-PARTY RIGHTS. LICENSEE UNDERSTANDS, ACKNOWLEDGES, AND AGREES THAT ADDITIONAL LICENSE(S) FROM A THIRD PARTY MAY BE REQUIRED TO EXERCISE THE ENTIRE RIGHT GRANTED HEREIN AND THAT LICENSOR SHALL HAVE NO OBLIGATION OR LIABILITY IN CONNECTION THEREWITH.
5.2 Limitation of Liability. UNDER NO CIRCUMSTANCES UNLESS REQUIRED BY APPLICABLE LAW SHALL LICENSOR BE LIABLE FOR INCIDENTAL, SPECIAL, INDIRECT, DIRECT OR CONSEQUENTIAL DAMAGES OR LOSS OF PROFITS, INTERRUPTION OF BUSINESS, OR RELATED EXPENSES WHICH MAY ARISE AS A RESULT OF THIS LICENSE OR OUT OF THE USE OR ATTEMPT OF USE OF SOFTWARE OR DOCUMENTATION INCLUDING BUT NOT LIMITED TO THOSE RESULTING FROM DEFECTS IN SOFTWARE AND/OR DOCUMENTATION, OR LOSS OR INACCURACY OF DATA OF ANY KIND. THE FOREGOING EXCLUSIONS AND LIMITATIONS WILL APPLY TO ALL CLAIMS AND ACTIONS OF ANY KIND, WHETHER BASED ON CONTRACT, TORT (INCLUDING, WITHOUT LIMITATION, NEGLIGENCE), OR ANY OTHER GROUNDS.
5.3 The Software and Documentation have been designed for research purposes only and have not been reviewed or approved by the Food and Drug Administration or by any other agency controlling or regulating use for human or veterinary purposes.  LICENSEE UNDERSTANDS, ACKNOWLEDGES, AND AGREES THAT CLINICAL APPLICATIONS ARE NEITHER RECOMMENDED, ADVISED, OR ALLOWED UNDER THIS AGREEMENT.  Any use of the Software or Documentation is at the sole risk of the party or parties engaged in such use. THE SOFTWARE AND DOCUMENTATION ARE NOT DESIGNED, INTENDED, OR AUTHORIZED FOR USE IN ANY TYPE OF SYSTEM OR APPLICATION IN WHICH THE FAILURE OF THE SYSTEM OR APPLICATION COULD CREATE A SITUATION WHERE PERSONAL INJURY OR DEATH MAY OCCUR (E.G., MEDICAL SYSTEMS, LIFE-SUSTAINING OR LIFE-SAVING SYSTEMS).
6. INDEMNIFICATION.
Licensee shall indemnify, defend and hold harmless Licensor, The University of Texas System, their Regents, and their officers, agents and employees from and against any claims, demands, or causes of action whatsoever caused by, or arising out of, or resulting from, the exercise or practice of the license granted hereunder by Licensee, its officers, employees, agents or representatives.
7.  TERMINATION.
If Licensee breaches this SRL, Licensees right to use the Software and Documentation will terminate immediately without notice, but all provisions of this SRL except Section 2 will survive termination and continue in effect. Upon termination, Licensee must destroy all copies of the Software and Documentation.
8.  GOVERNING LAW; JURISDICTION AND VENUE.
The validity, interpretation, construction and performance of this SRL shall be governed by the laws of the State of Texas. The Texas state courts of Harris County, Texas (or, if there is exclusive federal jurisdiction, the United States District Court for the Southern District of Texas) shall have exclusive jurisdiction and venue over any dispute arising out of this SRL, and Licensee consents to the jurisdiction of such courts. Application of the United Nations Convention on Contracts for the International Sale of Goods is expressly excluded.
9.  EXPORT CONTROLS.
This license is subject to all applicable export restrictions. Licensee must comply with all export and import laws and restrictions and regulations of any United States or foreign agency or authority relating to the Software and its use.
10.  U.S. GOVERNMENT END-USERS.
The Software is a commercial item, as that term is defined in 48 C.F.R. 2.101, consisting of commercial computer software and commercial computer software documentation, as such terms are used in 48 C.F.R. 12.212 (Sept. 1995) and 48 C.F.R. 227.7202 (June 1995). Consistent with 48 C.F.R. 12.212, 48 C.F.R. 27.405(b) (2) (June 1998) and 48 C.F.R. 227.7202, all U.S. Government End Users acquire the Software with only those rights as set forth herein.
11. MISCELLANEOUS
If any provision hereof shall be held illegal, invalid or unenforceable, in whole or in part, such provision shall be modified to the minimum extent necessary to make it legal, valid and enforceable, and the legality, validity and enforceability of all other provisions of this SRL shall not be affected thereby. Licensee may not assign this SRL in whole or in part, without Licensors prior written consent. Any attempt to assign this SRL without such consent will be null and void. This SRL is the complete and exclusive statement between Licensee and Licensor relating to the subject matter hereof and supersedes all prior oral and written and all contemporaneous oral negotiations, commitments and understandings of the parties, if any. Any waiver by either party of any default or breach hereunder shall not constitute a waiver of any provision of this SRL or of any subsequent default or breach of the same or a different kind.

Attachment A

This Attachment contains certain notices of software components included with the CLAMP software that The University of Texas Health Science Center at Houston is required to provide you. Notwithstanding anything in the notices in this attachment, your use of these software components together with the CLAMP software is subject to the terms of your license from The University of Texas Health Science Center at Houston.  Compliance with all copyright laws and software license agreements included in the notice section of this file are the responsibility of the user.  Except as may be granted by separate express written agreement, this attachment provides no license to any patents, trademarks, copyrights, or other intellectual property owned by The Board of Regents of The University of Texas System.

Copyright (c) 2011-2015 The University of Texas Health Science Center at Houston.  All rights reserved.


Open NLP, UIMA, GSON Toolkit and Lucene have been used in the development of CLAMP.  These programs have been distributed according to the following Apache 2.0 License:


Apache License
Version 2.0, January 2004
http://www.apache.org/licenses/

TERMS AND CONDITIONS FOR USE, REPRODUCTION, AND DISTRIBUTION

1. Definitions.

"License" shall mean the terms and conditions for use, reproduction,
and distribution as defined by Sections 1 through 9 of this document.

"Licensor" shall mean the copyright owner or entity authorized by
the copyright owner that is granting the License.

"Legal Entity" shall mean the union of the acting entity and all
other entities that control, are controlled by, or are under common
control with that entity. For the purposes of this definition,
"control" means (i) the power, direct or indirect, to cause the
direction or management of such entity, whether by contract or
otherwise, or (ii) ownership of fifty percent (50%) or more of the
outstanding shares, or (iii) beneficial ownership of such entity.

"You" (or "Your") shall mean an individual or Legal Entity
exercising permissions granted by this License.

"Source" form shall mean the preferred form for making modifications,
including but not limited to software source code, documentation
source, and configuration files.

"Object" form shall mean any form resulting from mechanical
transformation or translation of a Source form, including but
not limited to compiled object code, generated documentation,
and conversions to other media types.

"Work" shall mean the work of authorship, whether in Source or
Object form, made available under the License, as indicated by a
copyright notice that is included in or attached to the work
(an example is provided in the Appendix below).

"Derivative Works" shall mean any work, whether in Source or Object
form, that is based on (or derived from) the Work and for which the
editorial revisions, annotations, elaborations, or other modifications
represent, as a whole, an original work of authorship. For the purposes
of this License, Derivative Works shall not include works that remain
separable from, or merely link (or bind by name) to the interfaces of,
the Work and Derivative Works thereof.

"Contribution" shall mean any work of authorship, including
the original version of the Work and any modifications or additions
to that Work or Derivative Works thereof, that is intentionally
submitted to Licensor for inclusion in the Work by the copyright owner
or by an individual or Legal Entity authorized to submit on behalf of
the copyright owner. For the purposes of this definition, "submitted"
means any form of electronic, verbal, or written communication sent
to the Licensor or its representatives, including but not limited to
communication on electronic mailing lists, source code control systems,
and issue tracking systems that are managed by, or on behalf of, the
Licensor for the purpose of discussing and improving the Work, but
excluding communication that is conspicuously marked or otherwise
designated in writing by the copyright owner as "Not a Contribution."

"Contributor" shall mean Licensor and any individual or Legal Entity
on behalf of whom a Contribution has been received by Licensor and
subsequently incorporated within the Work.

2. Grant of Copyright License. Subject to the terms and conditions of
this License, each Contributor hereby grants to You a perpetual,
worldwide, non-exclusive, no-charge, royalty-free, irrevocable
copyright license to reproduce, prepare Derivative Works of,
publicly display, publicly perform, sublicense, and distribute the
Work and such Derivative Works in Source or Object form.

3. Grant of Patent License. Subject to the terms and conditions of
this License, each Contributor hereby grants to You a perpetual,
worldwide, non-exclusive, no-charge, royalty-free, irrevocable
(except as stated in this section) patent license to make, have made,
use, offer to sell, sell, import, and otherwise transfer the Work,
where such license applies only to those patent claims licensable
by such Contributor that are necessarily infringed by their
Contribution(s) alone or by combination of their Contribution(s)
with the Work to which such Contribution(s) was submitted. If You
institute patent litigation against any entity (including a
cross-claim or counterclaim in a lawsuit) alleging that the Work
or a Contribution incorporated within the Work constitutes direct
or contributory patent infringement, then any patent licenses
granted to You under this License for that Work shall terminate
as of the date such litigation is filed.

4. Redistribution. You may reproduce and distribute copies of the
Work or Derivative Works thereof in any medium, with or without
modifications, and in Source or Object form, provided that You
meet the following conditions:

(a) You must give any other recipients of the Work or
Derivative Works a copy of this License; and

(b) You must cause any modified files to carry prominent notices
stating that You changed the files; and

(c) You must retain, in the Source form of any Derivative Works
that You distribute, all copyright, patent, trademark, and
attribution notices from the Source form of the Work,
excluding those notices that do not pertain to any part of
the Derivative Works; and

(d) If the Work includes a "NOTICE" text file as part of its
distribution, then any Derivative Works that You distribute must
include a readable copy of the attribution notices contained
within such NOTICE file, excluding those notices that do not
pertain to any part of the Derivative Works, in at least one
of the following places: within a NOTICE text file distributed
as part of the Derivative Works; within the Source form or
documentation, if provided along with the Derivative Works; or,
within a display generated by the Derivative Works, if and
wherever such third-party notices normally appear. The contents
of the NOTICE file are for informational purposes only and
do not modify the License. You may add Your own attribution
notices within Derivative Works that You distribute, alongside
or as an addendum to the NOTICE text from the Work, provided
that such additional attribution notices cannot be construed
as modifying the License.

You may add Your own copyright statement to Your modifications and
may provide additional or different license terms and conditions
for use, reproduction, or distribution of Your modifications, or
for any such Derivative Works as a whole, provided Your use,
reproduction, and distribution of the Work otherwise complies with
the conditions stated in this License.

5. Submission of Contributions. Unless You explicitly state otherwise,
any Contribution intentionally submitted for inclusion in the Work
by You to the Licensor shall be under the terms and conditions of
this License, without any additional terms or conditions.
Notwithstanding the above, nothing herein shall supersede or modify
the terms of any separate license agreement you may have executed
with Licensor regarding such Contributions.

6. Trademarks. This License does not grant permission to use the trade
names, trademarks, service marks, or product names of the Licensor,
except as required for reasonable and customary use in describing the
origin of the Work and reproducing the content of the NOTICE file.

7. Disclaimer of Warranty. Unless required by applicable law or
agreed to in writing, Licensor provides the Work (and each
Contributor provides its Contributions) on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or
implied, including, without limitation, any warranties or conditions
of TITLE, NON-INFRINGEMENT, MERCHANTABILITY, or FITNESS FOR A
PARTICULAR PURPOSE. You are solely responsible for determining the
appropriateness of using or redistributing the Work and assume any
risks associated with Your exercise of permissions under this License.

8. Limitation of Liability. In no event and under no legal theory,
whether in tort (including negligence), contract, or otherwise,
unless required by applicable law (such as deliberate and grossly
negligent acts) or agreed to in writing, shall any Contributor be
liable to You for damages, including any direct, indirect, special,
incidental, or consequential damages of any character arising as a
result of this License or out of the use or inability to use the
Work (including but not limited to damages for loss of goodwill,
work stoppage, computer failure or malfunction, or any and all
other commercial damages or losses), even if such Contributor
has been advised of the possibility of such damages.

9. Accepting Warranty or Additional Liability. While redistributing
the Work or Derivative Works thereof, You may choose to offer,
and charge a fee for, acceptance of support, warranty, indemnity,
or other liability obligations and/or rights consistent with this
License. However, in accepting such obligations, You may act only
on Your own behalf and on Your sole responsibility, not on behalf
of any other Contributor, and only if You agree to indemnify,
defend, and hold each Contributor harmless for any liability
incurred by, or claims asserted against, such Contributor by reason
of your accepting any such warranty or additional liability.

END OF TERMS AND CONDITIONS

APPENDIX: How to apply the Apache License to your work.

To apply the Apache License to your work, attach the following
boilerplate notice, with the fields enclosed by brackets "[]"
replaced with your own identifying information. (Don't include
the brackets!)  The text should be enclosed in the appropriate
comment syntax for the file format. We also recommend that a
file or class name and description of purpose be included on the
same "printed page" as the copyright notice for easier
identification within third-party archives.

Copyright [yyyy] [name of copyright owner]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.



CRF++ has been used in the development of CLAMP. CRF++ has been distributed according to the following New BSD License:

Copyright (c) <YEAR>,
                <OWNER>
                    All rights reserved.

                    Redistribution and use in source and binary forms, with or without modification, are permitted
                    provided that the following conditions are met:

                    1. Redistributions of source code must retain the above copyright notice, this list of conditions
                    and the following disclaimer.

                    2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions
                    and the following disclaimer in the documentation and/or other materials provided with the
                    distribution.

                    3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse
                    or promote products derived from this software without specific prior written permission.

                    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR
                    IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
                    FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR
                    CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
                    DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
                    DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
                    IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF
                    THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.


                    LibSVM has been used in the development of CLAMP. LibSVM is distributed under the following
                    copyright notice.


                    Copyright (c) 2000-2014 Chih-Chung Chang and Chih-Jen Lin
                    All rights reserved.

                    Redistribution and use in source and binary forms, with or without
                    modification, are permitted provided that the following conditions
                    are met:

                    1. Redistributions of source code must retain the above copyright
                    notice, this list of conditions and the following disclaimer.

                    2. Redistributions in binary form must reproduce the above copyright
                    notice, this list of conditions and the following disclaimer in the
                    documentation and/or other materials provided with the distribution.

                    3. Neither name of copyright holders nor the names of its contributors
                    may be used to endorse or promote products derived from this software
                    without specific prior written permission.


                    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
                    ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
                    LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
                    A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE REGENTS OR
                    CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
                    EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
                    PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
                    PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
                    LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
                    NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
                    SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

                    The brat rapid annotation tool (v1.3 Crunchy Frog (2012-11-08)) has been used in the development of
                    CLAMP. Brat is distributed under the following open source license:

                    The MIT License (MIT)

                    Copyright (c) 2011-2014 the brat contributers

                    Permission is hereby granted, free of charge, to any person obtaining a copy
                    of this software and associated documentation files (the "Software"), to deal
                    in the Software without restriction, including without limitation the rights
                    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                    copies of the Software, and to permit persons to whom the Software is
                    furnished to do so, subject to the following conditions:

                    The above copyright notice and this permission notice shall be included in
                    all copies or substantial portions of the Software.

                    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                    THE SOFTWARE.

                    CLAMP uses the 2014AA release of the UMLS Metathesaurus from the National Library of Medicine
                    The SNOMED Clinical Terms library is being used in CLAMP as part of the 2014AA release of the UMLS
                    Metathesaurus.

                    This material includes SNOMED Clinical Terms (SNOMED CT) which is used by permission of the
                    International Health Terminology Standards Development Organisation (IHTSDO). All rights reserved.
                    SNOMED CT, was originally created by The College of American Pathologists. SNOMED and
                    SNOMED CT are registered trademarks of the IHTSDO.

    </textarea>

                <div class="form-group" style="margin-bottom: 30px">
                    <label class="radio-inline">
                        <input name="licence" id="radio1" value="YES" type="radio" onclick="check()"> Yes, I agree
                    </label>
                    <label class="radio-inline">
                        <input name="licence" id="radio2" value="NO" onclick="check()" type="radio" checked> No, I
                        don't agree
                    </label>
                </div>

                <button id="submitbtn" type="submit" class="btn btn-default" name='submit' disabled>Submit</button>

                <div class="content" style="margin-bottom: 200px;">
                    <H5>In order to use the UMLS encoder, you need obtain an UMLS account. Please go to:<a
                            href="https://uts.nlm.nih.gov/license.html">https://uts.nlm.nih.gov/license.html</a> to
                        check the current license agreement and register for an account if you do not already have
                        one.</H5>
                </div>
            </form>

        </div>
        <!-- / END CONTACT FORM-->
    </div>
    <!-- / END CONTAINER -->

</div>
<!-- / END DOWNLOAD SECTION-->