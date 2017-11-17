import React from 'react';
import Dag from './components/dag';
import Item from '.components/item';

/**
 * App component
 * @param props
 * @returns {XML}
 */
class App extends React.Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="app">
                Agenda
                <Dag
                    dag="Maandag"
                    datum="13 Nov"
                />
                <Dag
                    dag="Dinsdag"
                    datum="14 Nov"
                />
                <Dag
                    dag="Woensdag"
                    datum="15 Nov"
                />
                <Dag
                    dag="Donderdag"
                    datum="16 Nov"
                />
                <Dag
                    dag="Vrijdag"
                    datum="17 Nov"
                />
                <Dag
                    dag="Zaterdag"
                    datum="18 Nov"
                />
                <Dag
                    dag="Zondag"
                    datum="19 Nov"
                />
                <Item
                  titel="Test Item"
                  tijd="14:00-16:00"
                  extra="Dit is een test item"
            </div>
        );
    }

}

export default App;
