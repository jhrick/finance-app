import { defineStore } from 'pinia';

type Errors = "internal-server-error" | "bad-request-error" | "not-found-error";

export const useErrorStore = defineStore('error', {
  actions: {
    throwError(code: Errors, message?: string) {
      throw new Error(code, { cause: message })
    }
  }
})