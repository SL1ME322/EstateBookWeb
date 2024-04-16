FROM maven:3.8.5-openjdk-17 AS build
WORKDIR /app
COPY . .
RUN mvn clean package -DskipTests

FROM openjdk:17.0.1-jdk-slim
COPY --from=build /app/target/EstateBookWeb-0.0.1-SNAPSHOT.jar /demo.jar
EXPOSE 8080
ENTRYPOINT ["java","-jar","/demo.jar"]


FROM mcr.microsoft.com/mssql/server:2019-latest AS sql-server
ENV ACCEPT_EULA=Y
ENV MSSQL_PID=Express
ENV MSSQL_DATABASE=EstateBookFinal
# Включение аутентификации Windows
ENV MSSQL_ENABLE_MSAUTHENTICATION=true
COPY init.sql /docker-entrypoint-initdb.d/