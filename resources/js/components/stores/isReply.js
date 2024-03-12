// stores/counter.js
import { defineStore } from 'pinia'

export const isReply = defineStore('sessionize', {
  state: () => {
    return { isTrue: false }
  },
  // could also be defined as
  // state: () => ({ count: 0 })
  getters: {
    makeTrue() {
      this.isTrue = true;
    },
  },
})
