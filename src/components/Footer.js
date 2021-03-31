import React from 'react';
import logo  from './img/logo21.png';

const Footer = () => {
	return(
		<footer>
		<div className='container-fluid padding'>
			<div className='row text-center'>
				<div className='col-md-4'>
					<img src={logo}/>
					<hr className='light'></hr>
					<p>555-55-55</p>
					<p>nayan@gmail.com</p>
					<p>kailabor,nagoan</p>
					<p>assam,india</p>
				</div>
				<div className='col-md-4'>
					<hr className='light'></hr>
					<h5>Our Hours</h5>
					<hr className='light'></hr>
					<p>Monday:9am - 5pm</p>
					<p>saturday:10am - 4pm</p>
					<p>Sunday:closed</p>
				</div>
				<div className='col-md-4'>
					<hr className='light'></hr>
					<h5>Our Hours</h5>
					<hr className='light'></hr>
					<p>Monday:9am - 5pm</p>
					<p>saturday:10am - 4pm</p>
					<p>Sunday:closed</p>
				</div>
				<div className='col-12'>
					<hr className='Light'></hr>
					<h5>&copy; nayannew.com</h5>
				</div>
			</div>
		</div>
		</footer>
	);
};

export default Footer;
