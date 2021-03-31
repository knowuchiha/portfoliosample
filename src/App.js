import React,{ Component } from 'react';
import Navbar              from './components/Navbar';
import Slider              from './components/Slider';
import Jumbotron           from './components/Jumbotron';
import Welcomesection      from './components/Welcomesection';
import Threecolumnsection  from './components/Threecolumnsection';
import Twocolumnsection    from './components/Twocolumnsection';
import Meettheteam         from './components/Meettheteam';
import Cards               from './components/Cards';
import Connect             from './components/Connect';
import Footer              from './components/Footer';

class App extends Component{
	render() {
		return (
			<div>
				<Navbar/>
				<Slider/>
				<Jumbotron/>
				<Welcomesection/>
				<Threecolumnsection/>
				<Twocolumnsection/>
				<Meettheteam/>
				<Cards/>
				<Connect/>
				<Footer/>
			</div>
		);
	}
}

export default App;
