# administrator}

    public int getAlexaRanking(String domain) {

        int result = 0;

        String url = ALEXA_API + domain;

        try {

            URLConnection conn = new URL(url).openConnection();

            try (InputStream is = conn.getInputStream()) {
