import { api } from "../../utils/api";

export const getAllUsers = async () => {
  const users = await api.get('?r=user/index')

  return users; 
}