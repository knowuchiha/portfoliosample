import React from 'react';

const Jumbotron = () => {
	return(
		<div className='container-fluid'>
			<div className='row jumbotron'>
				<div className='col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10'>
					<p className='lead'>
						"Sometimes you must hurt in order to know, fall in order to grow,
						lose in order to gain because life's greatest lessons are learned through pain."
					</p>
				</div>
					<div className='col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2'>
						<a href='#'>
							<button type='button' className='btn btn-outline-secondary btn-lg'>pein</button>
						</a>
					</div>
			</div>
		</div>
	);
};

export default Jumbotron;
