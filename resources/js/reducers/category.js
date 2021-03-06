import { handleActions } from "redux-actions";
import immutable from "immutability-helper";
import { ActionTypes } from "@actions";

export const categoryStateDefault = {
  categories: {},
  templates: {}
};

export default {
  categories: handleActions(
    {
      [ActionTypes.GET_CATEGORY_LIST_SUCCESS]: (state, action) => {
        return immutable(state, {
          categories: { $set: action.payload }
        });
      },
      [ActionTypes.GET_CATEGORY_TEMP_SUCCESS]: (state, action) => {
        return immutable(state, {
          templates: { $set: action.payload }
        });
      }
    },
    categoryStateDefault
  )
};
