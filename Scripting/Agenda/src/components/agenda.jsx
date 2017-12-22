import React from 'react';
import Dag from './dag';

/**
 * Agenda component
 * @param props
 * @returns {XML}
 */
class Agenda extends React.Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="agenda">
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
            </div>
        );
    }

}

export default Agenda;