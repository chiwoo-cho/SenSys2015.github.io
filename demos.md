---
layout: page
title: Posters and Demos
permalink: /demos/
---

###Accepted Posters###

<ul class="paper">
{% for poster in site.data.posters %}
  <li >
    <span class="papertitle">{{ poster.title }}</span> <br/> <span class="authors">{{ poster.authors}}</span><br/> {{ poster.affiliation }}
    </li>
{% endfor %}
</ul>

###Accepted Demos###

<ul class="paper">
{% for demo in site.data.demos %}
  <li>
    <span class="papertitle">{{ demo.title }}</span> <br/> <span class="authors">{{ demo.authors}}</span><br/>
    {{ demo.affiliation }}
    </li>
{% endfor %}

</ul>

###CALL FOR POSTERS AND DEMOS###


The ACM Conference on Embedded Networked Sensor Systems (SenSys) is a
highly selective, single-track forum for research on systems issues of
networked sensing and actuation, broadly defined. Systems of smart
sensors and actuators will revolutionize a wide array of application
areas by providing an unprecedented density and fidelity of
instrumentation. They also present systems challenges because of
resource constraints, uncertainty, irregularity, mobility, and
scale. This conference provides an ideal venue to address research
challenges facing the design, development, deployment, use, and
fundamental limits of these systems. Sensing and actuation systems
require contributions from many fields, from wireless communication
and networking, embedded systems and hardware, energy harvesting and
management, distributed systems and algorithms, data management, and
applications, so we welcome cross-disciplinary work.


SenSys 2014 solicits submissions of both poster and demo abstracts in
reflecting research and development in the above areas of interest.
Contributions from industry presenting prototypes of platforms and
solutions that might enhance future innovative applications are also
encouraged. Submitted abstracts will be evaluated based on technical
merit and innovation as well as their potential to stimulate
interesting discussions and exchange of ideas. Authors of accepted
abstracts will be given a one-minute slot in a "madness session"
during the conference to present their work in front of the conference
audience. As with previous editions of SenSys, the best poster and
demo will receive an award.


All abstracts shall be formatted according to the main conference
paper layout. Accepted abstracts will appear in the conference
proceedings.

[Download the LaTeX template]({{ site.baseurl }}/resources/documents/latex-sensys.zip)

####IMPORTANT DATES####

- Abstract submission: August 4, 2014

- Notification of acceptance: August 28, 2014

- Camera-ready abstract: September 15, 2014


####SUBMISSION INSTRUCTIONS####


If you are submitting a demo abstract, please add "Demo Abstract:"
at the beginning of the abstract's title. 

<a href="https://www.easychair.org/conferences/?conf=sensys2014demos">Submit your Demo</a>


If you are submitting a poster abstract, please add "Poster Abstract:"
at the beginning of the abstract's title. 

<a href="https://www.easychair.org/conferences/?conf=sensys2014posters">Submit your Poster</a>




###POSTERS###


The poster session at SenSys provides a forum for researchers to
present their work and receive feedback from experts attending the
conference. We explicitly encourage submissions from students.


Posters must be submitted as a single PDF containing no more than 3
pages. The first two pages should contain an abstract describing the
research content of the poster, along with title, authors,
institutional affiliations and contact information. The third page
should contain a thumbnail draft of the poster's contents. 

For more information, please contact the poster chair:

Octav Chipara <octav-chipara@uiowa.edu>


###DEMOS### 


Sensys solicits demonstrations showing innovative research and
applications. Demos which showcase working systems, new platforms and
tools, innovative applications, path breaking ideas, and other
revolutionary concepts are welcome. Submissions from both industry and
universities are encouraged.


Demos must be submitted as a single PDF containing no more than 3
pages.  The first two pages should contain an abstract describing the
research content of the demo, along with title, authors, institutional
affiliations and contact information.  The third, optional page, whose
format is at your discretion, should contain any additional
information that will be used only to evaluate your demonstration
proposal.  For example, you may detail what you will show during the
demo, outline special requirements (e.g., unusual space needs,
exclusive access to a wireless channel, etc.), or provide links to
additional online material related to your demo.  Links to videos
showing the demonstration are especially encouraged and videos of
accepted demos will be linked from the SenSys web pages.


For more information, please contact the demo chairs:


Kay Römer <roemer@tugraz.at>

Peter Volgyesi <peter.volgyesi@vanderbilt.edu>

