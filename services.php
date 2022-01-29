
  }
                }
            }

        } catch (Exception e) {
            e.printStackTrace();
            throw new IllegalArgumentException("Invalid request for domain : " + domain);
        }

        return result;
