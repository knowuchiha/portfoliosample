import React        from 'react';
import background3  from './img/back4.png';
import background1  from './img/back5.png';
import background2  from './img/back6.png';

const Slider = () => {
	return(
		<div id='slides' className='carousel slide' data-ride='carousel'>
			<ul className='carousel-indicators'>
				<li data-target='#slides' data-slide-to='0' className='active'></li>
				<li data-target='#slides' data-slide-to='1'></li>
				<li data-target='#slides' data-slide-to='2'></li>
			</ul>
			<div className='carousel-inner'>
				<div className='carousel-item active'>
					<img src={background1}/>
					<div className='carousel-caption'>
						<h1 className='display-2'>
							Pein
						</h1>
						<h3>Know Pein
						</h3>
						<button type='button' className='btn btn-outline-light btn-lg'>Pein Quotes</button>
						<button type='button' className='btn btn-primary btn-lg'>Pein philosopy</button>
					</div>
				</div>
				<div className='carousel-item'>
					<img src={background2}/>
				</div>
				<div className='carousel-item'>
					<img src={background3}/>
				</div>
			</div>
		</div>
	);
};

export default Slider;

