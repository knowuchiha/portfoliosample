import  React from 'react';
import  back1 from './img/back3.png';

const Cards = () => {
	return (
		<div className='container-fluid padding'>
			<div className='row padding'>
				<div className='col-md-4'>
					<div className='card'>
						<img className='card-img-top' src={back1}/>
							<div className='card-body'>
								<h4 className='card-title'>pein</h4>
								<p className='card-text'>this world shall know pain</p>
							</div>
					</div>
				</div>
				<div className='col-md-4'>
					<div className='card'>
						<img className='card-img-top' src={back1}/>
							<div className='card-body'>
								<h4 className='card-title'>pein</h4>
								<p className='card-text'>this world shall know pain</p>
							</div>
					</div>
				</div>
				<div className='col-md-4'>
					<div className='card'>
						<img className='card-img-top' src={back1}/>
							<div className='card-body'>
								<h4 className='card-title'>pein</h4>
								<p className='card-text'>this world shall know pain</p>
							</div>
					</div>
				</div>
			</div>
			<hr className='my-4'></hr>
		</div>
	);
};

export default Cards;
