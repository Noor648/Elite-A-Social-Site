import { connect } from 'react-redux'
import SidebarComponent from '../components/Sidebar'
import {populateMessagesList} from '../actions'

const mapDispatchToProps = dispatch => ({
  dispatch: (data, userFrom) => {
    populateMessagesList(data, userFrom);
  }
})
export const Sidebar = connect(state => state, null)(SidebarComponent)