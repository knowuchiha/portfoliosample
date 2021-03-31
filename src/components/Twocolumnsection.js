import React from 'react';
import back1 from './img/pein.jpg';

const Twocolumnsection = () => {
	return(
		<div className='container-fluid padding'>
			<div className='row padding'>
				<div className='col-md-12 col-lg-6'>
					<h2 className='lead'>Why there is pain ?</h2>
					<p className='lead'>"Love is the reason why there is pain. When we lose someone precious to us, hate is born. Vengeance is the product of that hate and so death follows. But in death there is only more death. This will give rise to more pains. In this cursed world we live in, it is a cycle of hatred that will not cease. You and I seek the same thing that Jiraiya-sensei wanted. Let me ask you this: How will you confront this hatred in order to create peace?"</p>
				</div>
				<div className='col-lg-6'>
					<img src={back1} className='img-fluid'/>
				</div>
			</div>
			<hr className='my-4'></hr>
		</div>
	);
};

export default Twocolumnsection;
