import 'package:fpdart/fpdart.dart';

typedef Result<T> = Either<Failure, T>;

class Failure {
  final String message;
  final int? code;

  const Failure(this.message, {this.code});
}
