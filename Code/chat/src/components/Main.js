import React from 'react';
import {connect} from 'react-redux';
import { MessagesList } from './../containers/MessagesList';
import { AddMessage } from './../containers/AddMessage';

function Main({userFrom}) {
    if(!userFrom) return null;

    return (
        <section id="main">
            <MessagesList />
            <AddMessage userFrom={userFrom} />
        </section>
    );
};

export default connect(state => ({
    userFrom: state.messages.userFrom
}), {})(Main)